<x-app-layout>
    <div class="p-4">
        <div x-data="{
            activeTab: 'information',
            tabSwitch(event) {
                this.activeTab = event.target.id;
            }
        }" class="w-full bg-white border border-gray-200 rounded-lg shadow">
            <ul role="tablist"
                class="flex flex-wrap text-sm font-medium text-center text-gray-500 border-b border-gray-200 rounded-t-lg bg-gray-50">
                <li class="me-2">
                    <button id="information" @click="tabSwitch($event)" data-tabs-target="#information" type="button"
                        role="tab" aria-selected="true" aria-controls="information"
                        class="inline-block p-4 text-blue-600 rounded-ss-lg hover:bg-gray-100" id="information">
                        Information
                    </button>
                </li>
                <li class="me-2">
                    <button id="images" @click="tabSwitch($event)" data-tabs-target="#information" type="button"
                        role="tab" class="inline-block p-4 text-blue-600 hover:bg-gray-100" id="information">
                        Images
                    </button>
                </li>
                <li class="me-2">
                    <button id="tags" @click="tabSwitch($event)" data-tabs-target="#information" type="button"
                        role="tab" class="inline-block p-4 text-blue-600 hover:bg-gray-100" id="information">
                        Tags
                    </button>
                </li>
                <li class="me-2">
                    <button id="inventory" @click="tabSwitch($event)" data-tabs-target="#information" type="button"
                        role="tab" class="inline-block p-4 text-blue-600 hover:bg-gray-100" id="information">
                        Inventory
                    </button>
                </li>
            </ul>
            <div id="defaultTabContent">
                <div x-cloak x-show="activeTab === 'information'" id="information" role="tabpanel"
                    aria-labelledby="information-tab" class="p-4 bg-white rounded-lg">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                        <div class="p-4 sm:p-8 bg-white sm:rounded-lg">
                            <div class="max-w-xl">
                                <section>
                                    <header class="mb-4">
                                        <h2 class="text-lg font-medium text-gray-900">
                                            {{ __('Create catalogue') }}
                                        </h2>
                                    </header>
                                    <form method="POST" action="{{ route('catalogue.store') }}">
                                        @csrf
                                        <div>
                                            <x-input-label for="name" :value="__('Name')" />
                                            <x-text-input id="name" name="name" type="text"
                                                class="mt-1 block w-full" autofocus autocomplete="name" />
                                            <x-input-error class="mt-2" :messages="$errors->get('name')" />
                                        </div>
                                        <div class="mt-6">
                                            <x-input-label for="description" :value="__('Description')" />
                                            <x-text-input id="description" name="description" type="text"
                                                class="mt-1 block w-full" />
                                            <x-input-error class="mt-2" :messages="$errors->get('description')" />
                                        </div>
                                        <div class="mt-6">
                                            <button class="bg-green-600 text-sm font-bold py-2 px-4 text-white rounded"
                                                type="submit">Save</button>
                                        </div>
                                    </form>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
                <div x-cloak x-show="activeTab === 'images'" id="information" role="tabpanel"
                    aria-labelledby="information-tab" class="p-4 bg-white rounded-lg">
                    <h1>Images</h1>
                </div>
                <div x-cloak x-show="activeTab === 'tags'" id="information" role="tabpanel"
                    aria-labelledby="information-tab" class="p-4 bg-white rounded-lg">
                    <h1>Tags</h1>
                </div>
                <div x-cloak x-show="activeTab === 'inventory'" id="information" role="tabpanel"
                    aria-labelledby="information-tab" class="p-4 bg-white rounded-lg">
                    <h1>Invnetory</h1>
                </div>
            </div>
        </div>
    </div>
    </div>
</x-app-layout>
