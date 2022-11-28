<div>
    <!-- close button -->
    <div class="close-chat bg-red-500 hover:bg-red-600 text-white mb-1 w-10 flex justify-center items-center px-2 py-1 rounded self-end cursor-pointer">
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-x" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M11.854 4.146a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708-.708l7-7a.5.5 0 0 1 .708 0z"/>
            <path fill-rule="evenodd" d="M4.146 4.146a.5.5 0 0 0 0 .708l7 7a.5.5 0 0 0 .708-.708l-7-7a.5.5 0 0 0-.708 0z"/>
        </svg>
    </div>
    <!-- admin profile -->
    <div class="flex justify-between items-center text-white p-2 bg-blue-700 border shadow-lg mr-5 w-full">
        <div class="flex items-center">
            <img src="https://f0.pngfuel.com/png/136/22/profile-icon-illustration-user-profile-computer-icons-girl-customer-avatar-png-clip-art-thumbnail.png" alt="picture" class="rounded-full w-8 h-8 mr-1">
            <h2 class="font-semibold tracking-wider text-gray-200">Soporte Torcoroma</h2>
        </div>
        <div class="flex items-center justify-center">
            <small class="mr-1">online</small>
            <div class="rounded-full w-2 h-2 bg-white"></div>
        </div>
    </div>
    <!-- chats -->
    <div class="flex flex-col bg-gray-200 px-2 chat-services expand overflow-auto">
        <div class="chat bg-white text-blue-700 p-2 self-start my-2 rounded-md shadow mr-3">
            hola, en que te podemos ayudar?
        </div>
        <div class="message bg-blue-500 text-white p-2 self-end my-2 rounded-md shadow ml-3">
            Buenos días, necesito encontrar información de un pasaje!
        </div>
        <div class="message bg-blue-500 text-white p-2 self-end my-2 rounded-md shadow ml-3">
            le agradezco, es urgente.
        </div>
        <div class="message bg-white text-gray-700 p-2 self-start my-2 rounded-md shadow mr-3">
            Claro que si, con mucho gusto.
        </div>
        <div class="message bg-blue-500 text-white p-2 self-end my-2 rounded-md shadow ml-3">
            Necesito viajar hoy pero no se ¿Que debo hacer?.
        </div>
        <div class="message bg-white text-gray-700 p-2 self-start my-2 rounded-md shadow mr-3">
            Inmediatamente, le indico que debe hacer.
        </div>

    </div>
    <!-- send message -->
    <div class="relative bg-white">
        <input type="text" name="message" placeholder="Escriba su mensaje aquí..."
               class="pl-4 pr-16 py-2 border border-green-500 focus:outline-none w-full">
        <button class="font-bold absolute right-0 bottom-0 text-blue-600 bg-white  hover:text-blue-800 m-1 px-3 py-1 w-auto transistion-color duration-100 focus:outline-none">Enviar</button>
    </div>
</div>
