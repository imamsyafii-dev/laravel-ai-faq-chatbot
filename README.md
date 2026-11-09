# Laravel AI FAQ Chatbot

A simple FAQ chatbot application built with Laravel and Ollama.

This project demonstrates how to use the Laravel AI SDK to connect a Laravel application to a local AI model without the OpenAI API or paid AI services.

## Teknologi

- Laravel 13
- PHP 8.4
- Laravel AI SDK
- Livewire
- Blade
- SQLite
- Ollama
- Llama 3.2

## Features

- Landing page
- AI chat page
- AI responses in Indonesian
- Local AI model
- No `OPENAI_API_KEY` required
- No MySQL or Docker required

## Requirements

Make sure the following are installed:

- PHP
- Composer
- Laravel
- Ollama

Install the Ollama model:

```bash
ollama pull llama3.2
```

Run Ollama:

```bash
ollama serve
```

## Project Installation

Clone the repository:

```bash
git clone <repository-url>
cd laravel-ai-faq-chatbot
```

Install dependencies:

```bash
composer install
```

Copy the environment file:

```bash
cp .env.example .env
```

Generate the application key:

```bash
php artisan key:generate
```

Run the database migrations:

```bash
php artisan migrate
```

Make sure the Ollama configuration exists in `.env`:

```env
OLLAMA_URL=http://localhost:11434
OLLAMA_API_KEY=
```

Run the Laravel application:

```bash
php artisan serve
```

Buka browser:

```text
http://127.0.0.1:8000
```

The chat page is available at:

```text
http://127.0.0.1:8000/chat
```

## Architecture

```text
Browser
   ↓
Laravel Blade
   ↓
ChatController
   ↓
ChatAgent
   ↓
Laravel AI SDK
   ↓
Ollama
   ↓
Llama 3.2
```

## Running Without Internet

The application can run without an internet connection as long as:

- Ollama is installed;
- the `llama3.2` model has been downloaded;
- Laravel dependencies are installed;
- Ollama is running.

An internet connection is only required to install dependencies or download new models.

## Notes

The `llama3.2` model runs locally on your computer. AI responses are based on the model's existing knowledge and do not currently use live internet data or application database data.
