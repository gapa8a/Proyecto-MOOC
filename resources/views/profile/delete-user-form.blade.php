<x-jet-action-section>
    <x-slot name="title">
        {{ __('Eliminar Cuenta') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Elimine su cuenta de manera permanete.') }}
    </x-slot>

    <x-slot name="content">
        <div class="max-w-xl text-sm text-gray-600">
            {{ __('Una vez su cuenta sea eliminada, todos sus datos serán eliminados de manera permanente. Antes de eliminar su cuenta tenga en cuenta que si es un instructor con cursos dentro de la plataforma, no se recomienda eliminar la cuenta.') }}
        </div>

        <div class="mt-5">
            <x-jet-danger-button wire:click="confirmUserDeletion" wire:loading.attr="disabled">
                {{ __('Eliminar cuenta') }}
            </x-jet-danger-button>
        </div>

        <!-- Delete User Confirmation Modal -->
        <x-jet-dialog-modal wire:model="confirmingUserDeletion">
            <x-slot name="title">
                {{ __('Eliminar Cuenta') }}
            </x-slot>

            <x-slot name="content">
                {{ __('¿Está seguro de que desea eliminar su cuenta? Una vez su cuenta se eliminada todo el contenido adquirido en la plataforma sera revocado y eliminado. Si usted es un instructor no se recomienda eliminar su cuenta. Por favor ingrese su contraseña para eliminar su cuenta de manera permantente.') }}

                <div class="mt-4" x-data="{}" x-on:confirming-delete-user.window="setTimeout(() => $refs.password.focus(), 250)">
                    <x-jet-input type="password" class="mt-1 block w-3/4"
                                placeholder="{{ __('Contraseña') }}"
                                x-ref="password"
                                wire:model.defer="password"
                                wire:keydown.enter="deleteUser" />

                    <x-jet-input-error for="password" class="mt-2" />
                </div>
            </x-slot>

            <x-slot name="footer">
                <x-jet-secondary-button wire:click="$toggle('confirmingUserDeletion')" wire:loading.attr="disabled">
                    {{ __('Cancelar') }}
                </x-jet-secondary-button>

                <x-jet-danger-button class="ml-2" wire:click="deleteUser" wire:loading.attr="disabled">
                    {{ __('Eliminar Cuenta ') }}
                </x-jet-danger-button>
            </x-slot>
        </x-jet-dialog-modal>
    </x-slot>
</x-jet-action-section>
