<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advanced Level Chat-Box UI</title>
    <link rel="stylesheet" href="/chatbootstrap/style.css">
</head>

<body>
    @php
        $discuss = DB::table('discussions')->where('trainee',Auth::user()->id)->first();
        $message = DB::table('chats')->where('discussion_id',$discuss->id)->get();
    @endphp

    <div class="container">
        <!-- chat box -->
        <div class="chat-box">
            <!-- client -->
            <div class="client">
                <img src="/chatbootstrap/logo.png" alt="logo" />
                <div class="client-info">
                    <h2>Thanos</h2>
                    <p>online</p>
                </div>
            </div>

            <!-- main chat section -->
            <div class="chats">
                @foreach ($message as $chat)
                @if ($chat->sender_id == Auth::user()->id)
                <div class="client-chat">{{ $chat->message }}</div>
                @else
                <div class="my-chat">{{ $chat->message}}</div>
                @endif
                @endforeach 
            </div>

            <!-- input field section -->
            <div class="chat-input">
    <form action="{{ route('admin.storemessage') }}" method="POST">
@csrf
        <input type="hidden" value="{{ $discuss->id }}" name="selected_chat">
                <input type="text" placeholder="Enter Message" name="chat"/>
                <button class="send-btn">
                    <img src="/chatbootstrap/send.png" alt="send-btn">
                </button>
    </form>
            </div>
        </div>

        <!-- button -->
        <div class="chat-btn">
            <img src="/chatbootstrap/Circle-icons-chat.svg.png" alt="chat box icon btn">
        </div>
    </div>

    <script src="/chatbootstrap/jquery-3.4.1.min.js"></script>
    <script src="/chatbootstrap/script.js"></script>
</body>

</html>