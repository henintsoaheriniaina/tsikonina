<x-layouts.app class="app" title="Ajouter une recette">

    <div class="bg-hero text-baseWhite">
        <h1 class="w-full pt-16 text-center font-sand text-3xl font-bold">Ajouter votre <span
                class="text-baseOrange-light">Recette</span>
        </h1>
        <div class="mx-auto flex min-h-[90vh] max-w-screen-md flex-col items-center justify-center gap-16 px-8 py-8">
            <div class="flex w-full">
                <form class="w-full space-y-10" method="POST" action="{{ route('recipes.store') }}" id="recipeForm"
                    enctype="multipart/form-data" x-data="app()">
                    @csrf
                    <div class="group relative z-0 mb-5">
                        <input type="text" name="title" id="title"
                            class="peer block w-full appearance-none border-0 border-b-2 border-baseGray-light bg-transparent px-0 py-2.5 text-sm focus:border-baseOrange-light focus:outline-none focus:ring-0"
                            placeholder=" " value="{{ old('title') }}" />
                        <label for="title"
                            class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-400 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:start-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:font-medium peer-focus:text-baseOrange-light rtl:peer-focus:left-auto rtl:peer-focus:translate-x-1/4">
                            Titre</label>
                    </div>
                    @error('title')
                        <div class="text-red-400">
                            {{ $message }}
                        </div>
                    @enderror
                    <div class="group relative z-0 mb-5 w-full">
                        <input type="number" min="0" name="prep_time" id="prep_time"
                            class="peer block w-full appearance-none border-0 border-b-2 border-baseGray-light bg-transparent px-0 py-2.5 text-sm focus:border-baseOrange-light focus:outline-none focus:ring-0"
                            placeholder=" " value="{{ old('prep_time') }}" />
                        <label for="prep_time"
                            class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-400 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:start-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:font-medium peer-focus:text-baseOrange-light rtl:peer-focus:translate-x-1/4">Temps
                            de préparation (en minutes) </label>
                    </div>
                    @error('prep_time')
                        <x-message color="red" message="{{ $message }}" />
                    @enderror
                    <div class="group relative z-0 mb-5 w-full">
                        <input type="number" min="0" name="cook_time" id="cook_time"
                            class="peer block w-full appearance-none border-0 border-b-2 border-baseGray-light bg-transparent px-0 py-2.5 text-sm focus:border-baseOrange-light focus:outline-none focus:ring-0"
                            placeholder=" " value="{{ old('cook_time') }}" />
                        <label for="cook_time"
                            class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-400 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:start-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:font-medium peer-focus:text-baseOrange-light rtl:peer-focus:translate-x-1/4">Temps
                            de cuisson (en minutes) </label>
                    </div>
                    @error('cook_time')
                        <x-message color="red" message="{{ $message }}" />
                    @enderror
                    <div class="group relative z-0 mb-5 w-full">
                        <input type="number" min="0" name="servings" id="servings"
                            class="peer block w-full appearance-none border-0 border-b-2 border-baseGray-light bg-transparent px-0 py-2.5 text-sm focus:border-baseOrange-light focus:outline-none focus:ring-0"
                            placeholder=" " value="{{ old('servings') }}" />
                        <label for="servings"
                            class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-400 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:start-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:font-medium peer-focus:text-baseOrange-light rtl:peer-focus:translate-x-1/4">Portion?</label>
                    </div>
                    @error('servings')
                        <x-message color="red" message="{{ $message }}" />
                    @enderror
                    <div class="group relative z-0 mb-5">
                        <textarea name="description" id="description "
                            class="peer block w-full resize-y appearance-none border-0 border-b-2 border-baseGray-light bg-transparent px-0 py-2.5 text-sm focus:border-baseOrange-light focus:outline-none focus:ring-0"
                            placeholder="" rows="7"> {{ old('description') }} </textarea>
                        <label for="description"
                            class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-400 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:start-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:font-medium peer-focus:text-baseOrange-light rtl:peer-focus:left-auto rtl:peer-focus:translate-x-1/4">
                            Description</label>
                    </div>
                    @error('description')
                        <x-message color="red" message="{{ $message }}" />
                    @enderror
                    <div class="group relative z-0 mb-5 w-full">
                        <select name="difficulty" id="difficulty"
                            class="peer block w-full appearance-none border-0 border-b-2 border-baseGray-light bg-transparent px-0 py-2.5 text-sm focus:border-baseOrange-light focus:outline-none focus:ring-0"
                            placeholder=" ">
                            <option value="easy" class="text-baseBlack" selected>Facile</option>
                            <option value="medium" class="text-baseBlack">Intermédiare</option>
                            <option value="advanced" class="text-baseBlack">Difficile</option>
                        </select>
                        <label for="difficulty"
                            class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-400 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:start-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:font-medium peer-focus:text-baseOrange-light rtl:peer-focus:left-auto rtl:peer-focus:translate-x-1/4">
                            Difficulté</label>
                    </div>
                    @error('difficulty')
                        <x-message color="red" message="{{ $message }}" />
                    @enderror
                    <div class="group relative z-0 mb-5 w-full">
                        <label for="image_url" class="w-full text-sm text-gray-400">Image</label>
                        <input type="file" name="image_url" id="image_url"
                            class="mt-4 block w-full cursor-pointer rounded-lg bg-baseGray-dark text-sm file:border-0 file:bg-baseWhite file:px-4 file:py-3 file:text-baseBlack">
                    </div>
                    @error('image_url')
                        <x-message color="red" message="{{ $message }}" />
                    @enderror
                    <textarea type="text" name="instructions" id="instructions" class="hidden"> {{ old('instructions') }} </textarea>
                    <div class="w-full max-w-6xl rounded-xl bg-transparent text-white" x-init="init($refs.wysiwyg)">
                        <div class="overflow-hidden rounded-md border border-gray-200">
                            <div class="flex w-full border-b border-gray-200 text-xl text-baseWhite">
                                <button type="button"
                                    class="h-10 w-10 border-r border-blue-200 outline-none hover:text-baseOrange-light focus:outline-none active:bg-gray-50"
                                    @click="format('bold')">
                                    <i class="mdi mdi-format-bold"></i>
                                </button>
                                <button type="button"
                                    class="h-10 w-10 border-r border-gray-200 outline-none hover:text-baseOrange-light focus:outline-none active:bg-gray-50"
                                    @click="format('italic')">
                                    <i class="mdi mdi-format-italic"></i>
                                </button>
                                <button type="button"
                                    class="mr-1 h-10 w-10 border-r border-gray-200 outline-none hover:text-baseOrange-light focus:outline-none active:bg-gray-50"
                                    @click="format('underline')">
                                    <i class="mdi mdi-format-underline"></i>
                                </button>
                                <button type="button"
                                    class="h-10 w-10 border-l border-r border-gray-200 outline-none hover:text-baseOrange-light focus:outline-none active:bg-gray-50"
                                    @click="format('formatBlock','P')">
                                    <i class="mdi mdi-format-paragraph"></i>
                                </button>
                                <button type="button"
                                    class="h-10 w-10 border-r border-gray-200 outline-none hover:text-baseOrange-light focus:outline-none active:bg-gray-50"
                                    @click="format('formatBlock','H1')">
                                    <i class="mdi mdi-format-header-1"></i>
                                </button>
                                <button type="button"
                                    class="h-10 w-10 border-r border-gray-200 outline-none hover:text-baseOrange-light focus:outline-none active:bg-gray-50"
                                    @click="format('formatBlock','H2')">
                                    <i class="mdi mdi-format-header-2"></i>
                                </button>
                                <button type="button"
                                    class="mr-1 h-10 w-10 border-r border-gray-200 outline-none hover:text-baseOrange-light focus:outline-none active:bg-gray-50"
                                    @click="format('formatBlock','H3')">
                                    <i class="mdi mdi-format-header-3"></i>
                                </button>
                                <button type="button"
                                    class="h-10 w-10 border-l border-r border-gray-200 outline-none hover:text-baseOrange-light focus:outline-none active:bg-gray-50"
                                    @click="format('insertUnorderedList')">
                                    <i class="mdi mdi-format-list-bulleted"></i>
                                </button>
                                <button type="button"
                                    class="mr-1 h-10 w-10 border-r border-gray-200 outline-none hover:text-baseOrange-light focus:outline-none active:bg-gray-50"
                                    @click="format('insertOrderedList')">
                                    <i class="mdi mdi-format-list-numbered"></i>
                                </button>
                                <button type="button"
                                    class="h-10 w-10 border-l border-r border-gray-200 outline-none hover:text-baseOrange-light focus:outline-none active:bg-gray-50"
                                    @click="format('justifyLeft')">
                                    <i class="mdi mdi-format-align-left"></i>
                                </button>
                                <button type="button"
                                    class="h-10 w-10 border-r border-gray-200 outline-none hover:text-baseOrange-light focus:outline-none active:bg-gray-50"
                                    @click="format('justifyCenter')">
                                    <i class="mdi mdi-format-align-center"></i>
                                </button>
                                <button type="button"
                                    class="h-10 w-10 border-r border-gray-200 outline-none hover:text-baseOrange-light focus:outline-none active:bg-gray-50"
                                    @click="format('justifyRight')">
                                    <i class="mdi mdi-format-align-right"></i>
                                </button>
                            </div>
                            <div class="w-full bg-white/60 backdrop-blur">
                                <iframe x-ref="wysiwyg" class="h-96 w-full overflow-y-auto">
                                </iframe>
                            </div>
                        </div>
                    </div>
                    @error('instructions')
                        <x-message color="red" message="{{ $message }}" />
                    @enderror
                    <div class="mt-8 flex items-center gap-8">
                        <button type="button" @click="submit"
                            class="rounded-lg bg-baseOrange-light px-5 py-2.5 text-center text-sm font-medium text-white transition-all duration-300 hover:bg-baseOrange-dark focus:outline-none">Ajouter</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        function app() {
            return {
                wysiwyg: null,
                init: function(el) {
                    this.wysiwyg = el;
                    this.wysiwyg.contentDocument.querySelector(
                        "head"
                    ).innerHTML += `<style>
                        *, ::after, ::before {box-sizing: border-box;}
                        :root {tab-size: 4;}
                        html {line-height: 1.15;text-size-adjust: 100%;}
                        body {margin: 0px; padding: 1rem 0.5rem;}
                        body {font-family:quicksand, -apple-system, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji";}
                        </style>`;

                    this.wysiwyg.contentDocument.body.innerHTML +=
                        `${document.getElementById("instructions").value }`;
                    this.wysiwyg.contentDocument.designMode = "on";
                },
                format: function(cmd, param) {
                    this.wysiwyg.contentDocument.execCommand(cmd, !1, param || null);
                },
                submit: function() {
                    const content = this.wysiwyg.contentDocument.body.innerHTML;
                    document.getElementById("instructions").value = content;
                    document.getElementById("recipeForm").submit();
                },
            };
        }
    </script>
</x-layouts.app>
