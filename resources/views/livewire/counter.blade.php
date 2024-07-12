<div class="pt-6">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                <header>
                    <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                        {{ __('Counter') }}
                    </h2>
                </header>

                <div class="text-sm mt-2">
                    <span>{{ __('Count') }}: </span>
                    <span>{{ $count }}</span>
                </div>

                <div>
                    <x-text-input type="number"
                                  class="mt-1 block w-full"
                                  wire:model.live="count"/>
                </div>

                <div class="mt-4">
                    <x-primary-button wire:click="increment">{{ __('Increment') }}</x-primary-button>
                </div>
            </div>
        </div>
    </div>
</div>
