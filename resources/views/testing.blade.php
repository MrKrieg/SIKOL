<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>testing</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div role="button" class="absolute top-2.5 left-2.5 inline-block text-[#623F19] bg-[#FFF7EA] hover:bg-[#FFF0D5] focus:ring-4 focus:outline-none focus:ring-[#FFDFAF] font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center me-2" tabindex="0">
        <svg class="w-4 h-4 transform rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
        </svg>
        <span class="sr-only">Icon description</span>
    </div>
    <div class="fixed bottom-0 left-0 w-full h-[55vh] bg-[#f7f2ec] p-8 shadow-lg flex flex-col font-sans rounded-t-[50px]">
        <form action="login.php" method="post" class="flex flex-col w-full items-center">
            <!-- LOGIN Text with Poppins Bold 32px -->
            <h2 class="text-[32px] font-bold font-poppins text-gray-800 mb-2 mt-2 w-full text-center">LOGIN</h2>
            <div class="w-full mb-4">
                <!-- Email Label with Jakarta Sans Bold 20px -->
                <h4 class="text-[20px] font-bold font-jakarta text-gray-800 mb-1">Email</h4>
                <input type="email" name="email" placeholder="Email" required
                    class="w-full p-3 border border-gray-300 rounded-md text-base">
            </div>
            <div class="w-full mb-4">
                <!-- Password Label with Jakarta Sans Bold 20px -->
                <h4 class="text-[20px] font-bold font-jakarta text-gray-800 mb-1">Password</h4>
                <input type="password" name="password" placeholder="Password" required
                    class="w-full p-3 border border-gray-300 rounded-md text-base">
            </div>
            <button type="submit" class="w-full py-2 bg-[#623F19] text-white rounded-full text-sm font-bold hover:bg-[#48392a]">
                LOGIN
            </button>
        </form>
    </div>
</body>
</html>
