<div class="pt-6">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                <form wire:submit.prevent="submit">
                    <div>
                        <x-input-label for="name" :value="__('Name')" />
                        <x-text-input type="text"
                                      id="name"
                                      class="mt-1 block w-full"
                                      wire:model.blur="name"/>
                        <x-input-error class="mt-2" :messages="$errors->get('name')" />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input type="email"
                                      id="email"
                                      class="mt-1 block w-full"
                                      wire:model.blur="email"/>
                        <x-input-error class="mt-2" :messages="$errors->get('email')" />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="password" :value="__('Password')" />
                        <x-text-input type="password"
                                      id="password"
                                      class="mt-1 block w-full"
                                      wire:model.blur="password"/>
                        <x-input-error class="mt-2" :messages="$errors->get('password')" />
                    </div>

                    <div class="mt-4">
                        <x-primary-button>
                            {{ __('Add User') }}
                            <div wire:loading wire:target="submit">
                                <svg class="animate-spin h-5 w-5 ml-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V2.5"></path>
                                </svg>
                            </div>
                        </x-primary-button>

                        <x-secondary-button type="button" class="ml-2" id="reload">
                            {{ __('Reload Page') }}
                        </x-secondary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@script
<script>
    $wire.on('user-created', () => {
        alert('User created successfully!');

        window.location.reload();
    });

    document.getElementById('reload').addEventListener('click', () => {
        $wire.dispatch('reload-page');
    });
</script>
@endscript
