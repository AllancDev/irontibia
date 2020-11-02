<x-slot name="header">
  <h2 class="font-semibold text-xl text-gray-800 leading-tight">
    Endereços
  </h2>
</x-slot>
<div class="py-12">
  <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
      @if (session()->has('message'))
      <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3" role="alert">
        <div class="flex">
          <div>
            <p class="text-sm">{{ session('message') }}</p>
          </div>
        </div>
      </div>
      @endif
      <button wire:click="create()"
        class="bg-blue-500 hover:bg-blue-700 text-dark font-bold py-2 px-4 rounded my-3">Adicionar</button>
      @if($isOpen)
      @include('livewire.create')
      @endif
      <table class="table-fixed w-full">
        <thead>
          <tr class="bg-gray-100">
            <th class="px-4 py-2 w-20">Id.</th>
            <th class="px-4 py-2">Rua</th>
            <th class="px-4 py-2">Bairro</th>
            <th class="px-4 py-2">Cidade</th>
            <th class="px-4 py-2">Numero</th>
            <th class="px-4 py-2">Complemento</th>
            <th class="px-4 py-2">Ação</th>
          </tr>
        </thead>
        <tbody>
          @foreach($addresses as $address)
          <tr>
            <td class="border px-4 py-2">{{ $address->id }}</td>
            <td class="border px-4 py-2">{{ $address->street }}</td>
            <td class="border px-4 py-2">{{ $address->neighborhood }}</td>
            <td class="border px-4 py-2">{{ $address->city }}</td>
            <td class="border px-4 py-2">{{ $address->number }}</td>
            <td class="border px-4 py-2">{{ $address->complement }}</td>
            <td class="border px-4 py-2">
              <button wire:click="edit({{ $address->id }})"
                class="bg-blue-500 hover:bg-blue-700 text-dark font-bold py-2 px-4 rounded">Editar</button>
              <button wire:click="delete({{ $address->id }})"
                class="bg-red-500 hover:bg-red-700 text-dark font-bold py-2 px-4 rounded">Excluir</button>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>