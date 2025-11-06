<x-layout>
    <x-slot:header>
        Create Job
    </x-slot:header>

    <form method="POST" action="/jobs">
        @csrf
        <div class="space-y-10">
            <div class="border-b border-white/10 pb-12">
                <h2 class="text-base/7 font-semibold text-white">Create a New Job</h2>
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <x-form-field>
                        <x-form-label for="title">Title</x-form-label>
                        <div class="mt-2">
                            <x-form-input name="title" id="title" placeholder="CEO" required />
                            <x-form-error name="title" />
                        </div>
                    </x-form-field>

                    <x-form-field>
                        <x-form-label for="salary">Salary</x-form-label>
                        <div class="mt-2">
                            <x-form-input name="salary" id="salary" placeholder="$ 50.000 USD" required />
                            <x-form-error name="salary" />
                        </div>
                    </x-form-field>
                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <button type="button" class="text-sm/6 font-semibold text-white cursor-pointer">Cancel</button>
            <x-form-button>Save</x-form-button>
        </div>
    </form>

</x-layout>
