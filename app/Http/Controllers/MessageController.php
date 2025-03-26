<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

class MessageController extends Controller
{
    protected $logger;

    public function __construct()
    {
        // Set up Monolog logger
        $this->logger = new Logger('message-controller');
        $this->logger->pushHandler(new StreamHandler(storage_path('logs/message.log'), Logger::DEBUG)); // Store logs in a file
    }

    public function index() 
    {
        // Get all messages with sender and receiver details
        $messages = Message::with('sender', 'receiver')->get();
        return view('messages.index', compact('messages'));
    }

    public function create() 
    {
        // Display message creation form
        return view('messages.create');
    }

    public function store(Request $request) 
    {
        // Validate and store new message data
        $request->validate([
            'sender_id' => 'required|exists:users,id',
            'receiver_id' => 'required|exists:users,id',
            'content' => 'required|string',
        ]);

        try {
            // Create the message
            $message = Message::create($request->all());
            
            // Log success message
            $this->logger->info('Message created successfully', ['message_id' => $message->id]);

            return redirect()->route('messages.index');
        } catch (\Exception $e) {
            // Log failure message
            $this->logger->error('Failed to create message', ['error' => $e->getMessage()]);
            
            return redirect()->route('messages.create')->with('error', 'Failed to create message');
        }
    }

    public function edit(Message $message) 
    {
        return view('messages.edit', compact('message'));
    }

    public function update(Request $request, Message $message) 
    {
        try {
            // Update the message
            $message->update($request->all());

            // Log success message
            $this->logger->info('Message updated successfully', ['message_id' => $message->id]);

            return redirect()->route('messages.index');
        } catch (\Exception $e) {
            // Log failure message
            $this->logger->error('Failed to update message', ['error' => $e->getMessage()]);

            return redirect()->route('messages.edit', $message->id)->with('error', 'Failed to update message');
        }
    }

    public function destroy(Message $message) 
    {
        try {
            // Delete the message
            $message->delete();

            // Log success message
            $this->logger->info('Message deleted successfully', ['message_id' => $message->id]);

            return redirect()->route('messages.index');
        } catch (\Exception $e) {
            // Log failure message
            $this->logger->error('Failed to delete message', ['error' => $e->getMessage()]);

            return redirect()->route('messages.index')->with('error', 'Failed to delete message');
        }
    }
}
