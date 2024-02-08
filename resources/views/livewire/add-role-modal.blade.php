<div>
    <button wire:click="openModal">Add Role</button>

    @if($showModal)
        <div>
            <div>
                <span>Add Role</span>
                <button wire:click="closeModal">Close</button>
            </div>

            <form wire:submit.prevent="addRole">
                <label for="roleTitle">Role Title</label>
                <input wire:model="roleTitle" type="text" id="roleTitle">

                <button type="submit">Save Role</button>
            </form>
        </div>
    @endif
</div>
