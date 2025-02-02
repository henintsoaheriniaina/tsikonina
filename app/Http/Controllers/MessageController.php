<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function send(Request $request)
    {
        $fields = $request->validate([
            "name" => ["required", "string", "max:255"],
            "message_sender_mail" => ["required", "email", "max:255"],
            "message" => ["required", "string", "min:8"]
        ], [
            "name.required" => "Le nom est requis.",
            "name.string" => "Le nom doit être une chaîne de caractères.",
            "name.max" => "Le nom ne peut pas dépasser 255 caractères.",
            "message_sender_mail.required" => "L'email est requis.",
            "message_sender_mail.email" => "Veuillez fournir une adresse email valide.",
            "message_sender_mail.max" => "L'email ne peut pas dépasser 255 caractères.",
            "message.required" => "Le message est requis.",
            "message.string" => "Le message doit être une chaîne de caractères.",
            "message.min" => "Le message doit contenir au moins 8 caractères."
        ]);
        Message::create($fields);
        return redirect()->back()->with('messageSent', 'Votre message a été envoyé avec succès. Nous vous répondrons bientôt.');
    }
}
