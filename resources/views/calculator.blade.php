<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>КАЛЬКУТОР</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-lg shadow-md w-96">
        <h1 class="text-2xl font-bold mb-6 text-center">КАЛЬКУТОР V8000</h1>
        @if(session('error'))
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                {{ session('error') }}
            </div>
        @endif
        @if(session('result'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                ОТВЕТ: {{ session('result') }}
            </div>
        @endif
        <form action="{{ route('calculate') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label for="num1" class="block text-sm font-medium text-gray-700">Число 1</label>
                <input type="number" name="num1" id="num1" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
            </div>
            <div>
                <label for="num2" class="block text-sm font-medium text-gray-700">Число 2</label>
                <input type="number" name="num2" id="num2" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
            </div>
            <div>
                <label for="operation" class="block text-sm font-medium text-gray-700">Операция</label>
                <select name="operation" id="operation" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                    <option value="add">Прибавить</option>
                    <option value="subtract">Вычесть</option>
                    <option value="multiply">Умножить</option>
                    <option value="divide">Поделить</option>
                </select>
            </div>
            <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Сосчитать
            </button>
        </form>
    </div>
</body>
</html>