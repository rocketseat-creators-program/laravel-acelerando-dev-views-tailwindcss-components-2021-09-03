@extends('layouts.app')

@section('content')
<div class="lg:grid lg:grid-cols-12 lg:gap-x-5">
  <aside class="py-6 px-2 sm:px-6 lg:py-0 lg:px-0 lg:col-span-3">
    <nav class="space-y-1">
      <!-- Current: "bg-gray-50 text-orange-600 hover:bg-white", Default: "text-gray-900 hover:text-gray-900 hover:bg-gray-50" -->
      <a href="{{ route('users.create') }}" class="text-gray-900 hover:text-gray-900 hover:bg-gray-50 group rounded-md px-3 py-2 flex items-center text-sm font-medium">
        <!--
          Current: "text-orange-500", Default: "text-gray-400 group-hover:text-gray-500"
        -->
        <svg xmlns="http://www.w3.org/2000/svg" class="text-gray-400 group-hover:text-gray-500 flex-shrink-0 -ml-1 mr-3 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
        </svg>
        <span class="truncate">
          Cadastrar
        </span>
      </a>

      <a href="#" class="bg-gray-50 text-orange-600 hover:bg-white group rounded-md px-3 py-2 flex items-center text-sm font-medium">
        <svg xmlns="http://www.w3.org/2000/svg" class="text-orange-400 group-hover:text-gray-500 flex-shrink-0 -ml-1 mr-3 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16" />
        </svg>
        <span class="truncate">
          Listar
        </span>
      </a>
    </nav>
  </aside>

  <div class="space-y-6 sm:px-6 lg:px-0 lg:col-span-9">
    <section aria-labelledby="billing-history-heading">
      <div class="bg-white pt-6 shadow sm:rounded-md sm:overflow-hidden">
        <div class="px-4 sm:px-6">
          <h2 class="text-lg leading-6 font-medium text-gray-900">Usuários</h2>
        </div>
        <div class="mt-6 flex flex-col">
          <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
              <div class="overflow-hidden border-t border-gray-200">
                <table class="min-w-full divide-y divide-gray-200">
                  <thead class="bg-gray-50">
                    <tr>
                      <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        ID
                      </th>
                      <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Nome
                      </th>
                      <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        E-mail
                      </th>
                      <!--
                        `relative` is added here due to a weird bug in Safari that causes `sr-only` headings to introduce overflow on the body on mobile.
                      -->
                      <th scope="col" class="relative px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        <span class="sr-only">Editar</span>
                      </th>
                    </tr>
                  </thead>

                  <tbody class="bg-white divide-y divide-gray-200">
                    <tr>
                      <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                        <time datetime="2020-01-01">1</time>
                      </td>
                      <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        Patrick Maciel
                      </td>
                      <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        patrickmaciel@example.com
                      </td>
                      <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                        <a href="#" class="text-orange-600 hover:text-orange-900">Editar</a>
                      </td>
                    </tr>

                    <tr>
                      <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                        <time datetime="2020-01-01">1</time>
                      </td>
                      <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        Aline Martins
                      </td>
                      <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        alinemartins@example.com
                      </td>
                      <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                        <a href="#" class="text-orange-600 hover:text-orange-900">Editar</a>
                      </td>
                    </tr>

                    <!-- More payments... -->
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>
@endsection
