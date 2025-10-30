<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top up - FareFlow</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white font-sans">

    <!-- Header -->
    <div class="bg-blue-100 flex items-center p-4 shadow">
        <button onclick="history.back()" class="text-black mr-3">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                 viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
            </svg>
        </button>
        <h1 class="text-red-600 font-bold text-xl">FareFlow</h1>
    </div>

    <!-- Content -->
    <div class="p-6">
        <h2 class="text-center text-xl font-bold mb-4">Top up</h2>
        <p class="text-gray-600 font-semibold mb-6">Choose top up method</p>

        <div class="divide-y divide-gray-200">
            <a href="#" class="flex items-center justify-between py-3">
                <div class="flex items-center space-x-3">
                    <img src="{{ asset('images/GoPay.png') }}" class="w-6 h-6" alt="GoPay">
                    <span class="font-medium">Gopay</span>
                </div>
                <span class="text-gray-400">&gt;</span>
            </a>

            <a href="#" class="flex items-center justify-between py-3">
                <div class="flex items-center space-x-3">
                    <img src="{{ asset('images/OVO.png') }}" class="w-6 h-6" alt="OVO">
                    <span class="font-medium">OVO</span>
                </div>
                <span class="text-gray-400">&gt;</span>
            </a>

            <a href="#" class="flex items-center justify-between py-3">
                <div class="flex items-center space-x-3">
                    <img src="{{ asset('images/DANA.png') }}" class="w-6 h-6" alt="DANA">
                    <span class="font-medium">DANA</span>
                </div>
                <span class="text-gray-400">&gt;</span>
            </a>

            <a href="#" class="flex items-center justify-between py-3">
                <div class="flex items-center space-x-3">
                    <img src="{{ asset('images/BluePay.png') }}" class="w-6 h-6" alt="Blue Pay">
                    <span class="font-medium">Blue Pay</span>
                </div>
                <span class="text-gray-400">&gt;</span>
            </a>

            <a href="#" class="flex items-center justify-between py-3">
                <div class="flex items-center space-x-3">
                    <img src="{{ asset('images/Spay.png') }}" class="w-6 h-6" alt="Spay">
                    <span class="font-medium">Spay</span>
                </div>
                <span class="text-gray-400">&gt;</span>
            </a>

            <a href="#" class="flex items-center justify-between py-3">
                <div class="flex items-center space-x-3">
                    <img src="{{ asset('images/card.png') }}" class="w-6 h-6" alt="Other Cards">
                    <span class="font-medium">Other Cards</span>
                </div>
                <span class="text-gray-400">&gt;</span>
            </a>
        </div>
    </div>

</body>
</html>
