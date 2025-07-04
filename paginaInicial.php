<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Página Inicial</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="Css/style.css">
</head>
<body class="bg-gray-50 text-gray-800 dark:bg-gray-900 dark:text-gray-100">

<!-- Navbar -->
<nav class="fixed top-0 z-50 w-full  border-b border-gray-200 dark:border-gray-700">
  <div class="px-3 py-3 lg:px-5 lg:pl-3">
    <div class="flex items-center justify-between">
      <div class="flex items-center justify-start rtl:justify-end">
        <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
            <span class="sr-only">Open sidebar</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
               <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
            </svg>
         </button>
        <a href="paginaInicial.html" class="flex ms-2 md:me-24">
          <span class="self-center text-xl font-semibold sm:text-2xl whitespace-nowrap dark:text-white" ><span style="color: #0a3055">Ky</span><span style="color: #0e76b3">tec</span></span >
        </a>
      </div>
      
    </div>
  </div>
</nav>

<!-- Sidebar -->
<aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full border-gray-200 sm:translate-x-0 dark:border-gray-700" aria-label="Sidebar">
  <div class="h-full px-3 pb-4 overflow-y-auto">
    <ul class="space-y-2 font-medium">
      <li>
        <a href="paginaInicial.html" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
          <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 22 21"><path d="M16.975 11H10V4.025a1 1 0 00-1.066-.998 8.5 8.5 0 109.039 9.039.999.999 0 00-1-1.066h.002Z"/><path d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0011 1.02V10h8.975a1 1 0 001-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0012.5 0Z"/></svg>
          <span class="ms-3">Inicial</span>
        </a>
      </li>
      <li>
        <a href="Estoque.html" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
          <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 18 20"><path d="M17 5.923A1 1 0 0016 5h-3V4a4 4 0 10-8 0v1H2a1 1 0 00-1 .923L.086 17.846A2 2 0 002.08 20h13.84a2 2 0 001.994-2.153L17 5.923ZM7 9a1 1 0 01-2 0V7h2v2Zm0-5a2 2 0 114 0v1H7V4Zm6 5a1 1 0 11-2 0V7h2v2Z"/></svg>
          <span class="flex-1 ms-3 whitespace-nowrap">Estoque</span>
        </a>
      </li>
      <li>
        <a href="Funcionarios.html" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
          <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 18"><path d="M14 2a3.963 3.963 0 00-1.4.267 6.439 6.439 0 01-1.331 6.638A4 4 0 1014 2Zm1 9h-1.264A6.957 6.957 0 0115 15v2a2.97 2.97 0 01-.184 1H19a1 1 0 001-1v-1a5.006 5.006 0 00-5-5ZM6.5 9a4.5 4.5 0 100-9 4.5 4.5 0 000 9ZM8 10H5a5.006 5.006 0 00-5 5v2a1 1 0 001 1h11a1 1 0 001-1v-2a5.006 5.006 0 00-5-5Z"/></svg>
          <span class="flex-1 ms-3 whitespace-nowrap">Funcionários</span>
        </a>
      </li>
    </ul>
  </div>
</aside>

<!-- Main Content -->


<script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>
</html>
