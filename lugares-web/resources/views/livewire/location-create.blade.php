<flux:modal name="edit-profile" class="md:w-96" wire:model="isOpen">
    <div class="space-y-6">
        <div>
            <flux:heading size="lg">Crear Ubicación</flux:heading>
        </div>

        <flux:input wire:model="nombreLugar" label="Nombre del lugar" placeholder="Ej. Plaza Principal" />
        <flux:input wire:model="region" label="Región" placeholder="Ej. Puno" />
        <flux:input wire:model="provincia" label="Provincia" placeholder="Ej. San Román" />
        <flux:input wire:model="distrito" label="Distrito" placeholder="Ej. Juliaca" />
        <flux:input wire:model="descripcion" label="Descripción" placeholder="Ej. Lugar céntrico con alto flujo" />

        <div class="flex gap-2">
            <flux:spacer />
            <flux:button wire:click="$set('isOpen', false)">Cancelar</flux:button>
            <flux:button
                wire:click.prevent="store"
                wire:loading.attr="disabled"
                wire:target="store"
                variant="primary"
            >
                Registrar
            </flux:button>
        </div>
    </div>
</flux:modal>


