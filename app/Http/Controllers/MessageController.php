<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;
use App\Models\Message;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

class MessageController extends Controller
{
    protected $logger;

    public function __construct()
    {
        // Set up Monolog logger
        $this->logger = new Logger('message-controller');
        $this->logger->pushHandler(new StreamHandler(storage_path('logs/message.log'), 100));
    }

    public function index()
    {
        // Get all messages with sender and receiver details
        $messages = Message::with('sender', 'receiver', 'property')->get();
        // Get all users except the current user for the dropdown
        $users = User::where('id', '!=', Auth::id())->get();
        // Get all properties for the dropdown
        $properties = Property::all();
        return view('messages.index', compact('messages', 'users', 'properties'));
    }

    public function store(Request $request)
    {
        try {
            // Debug the incoming request
            Log::info('Message request data:', $request->all());

            // Validate and store new message data
            $validated = $request->validate([
                'receiverId' => 'required|exists:users,id',
                'propertyId' => 'required|exists:properties,propertyId',
                'messBody' => 'required|string|max:500',
            ]);

            Log::info('Validation passed:', $validated);

            $user = Auth::user();
            Log::info('Current user:', ['user_id' => $user->id]);

            // Add the current user as the sender
            $messageData = [
                'senderId' => $user->id,
                'receiverId' => $request->receiverId,
                'propertyId' => $request->propertyId,
                'senderName' => $user->firstName . ' ' . $user->lastName,
                'senderEmail' => $user->email,
                'senderPhone' => $user->phoneNumber,
                'messBody' => $request->messBody
            ];

            // Debug the message data
            Log::info('Message data before create:', $messageData);

            // Create the message
            $message = Message::create($messageData);

            // Log success message
            Log::info('Message created successfully:', ['message' => $message->toArray()]);

            return redirect()->route('messages.index')->with('success', 'Message sent successfully');
        } catch (\Exception $e) {
            // Log failure message with full error details
            Log::error('Failed to create message', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
                'request_data' => $request->all()
            ]);

            return redirect()->route('messages.index')
                ->with('error', 'Failed to create message: ' . $e->getMessage())
                ->withInput();
        }
    }

    public function update(Request $request, Message $message)
    {
        try {
            // Update the message
            $message->update($request->all());

            // Log success message
            $this->logger->info('Message updated successfully', ['messageId' => $message->messageId]);

            return redirect()->route('messages.index');
        } catch (\Exception $e) {
            // Log failure message
            $this->logger->error('Failed to update message', ['error' => $e->getMessage()]);

            return redirect()->route('messages.index')->with('error', 'Failed to update message');
        }
    }

    public function destroy(Message $message)
    {
        try {
            // Delete the message
            $message->delete();

            // Log success message
            $this->logger->info('Message deleted successfully', ['messageId' => $message->messageId]);

            return redirect()->route('messages.index');
        } catch (\Exception $e) {
            // Log failure message
            $this->logger->error('Failed to delete message', ['error' => $e->getMessage()]);

            return redirect()->route('messages.index')->with('error', 'Failed to delete message');
        }
    }
}