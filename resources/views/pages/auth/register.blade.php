<x-layouts.app title="s'inscrire">
    <div class="bg-hero text-baseWhite">
        <div class="mx-auto flex min-h-[90vh] max-w-md flex-col items-center justify-center gap-16 px-8 py-8">
            <div class="flex w-full flex-col items-center justify-center gap-8">
                <h1 class="text-center font-sand text-5xl font-bold">Bienvenue sur <p class="text-baseOrange-light">
                        Tsikonina
                    </p>
                </h1>
            </div>
            <div class="flex w-full max-w-md">
                <form class="w-full space-y-10" method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="group relative z-0 mb-5">
                        <input type="email" name="email" id="email"
                            class="peer block w-full appearance-none border-0 border-b-2 border-baseGray-light bg-transparent px-0 py-2.5 text-sm focus:border-baseOrange-light focus:outline-none focus:ring-0"
                            placeholder=" " />
                        <label for="email"
                            class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-400 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:start-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:font-medium peer-focus:text-baseOrange-light rtl:peer-focus:left-auto rtl:peer-focus:translate-x-1/4">Adresse
                            email</label>
                    </div>
                    @error('email')
                        <x-message color="red" message="{{ $message }}" />
                    @enderror
                    <div class="group relative z-0 mb-5 w-full">
                        <input type="password" name="password" id="password"
                            class="peer block w-full appearance-none border-0 border-b-2 border-baseGray-light bg-transparent px-0 py-2.5 text-sm focus:border-baseOrange-light focus:outline-none focus:ring-0"
                            placeholder=" " />
                        <label for="password"
                            class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-400 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:start-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:font-medium peer-focus:text-baseOrange-light rtl:peer-focus:translate-x-1/4">Mot
                            de passe</label>
                    </div>
                    @error('password')
                        <x-message color="red" message="{{ $message }}" />
                    @enderror
                    <div class="group relative z-0 mb-5 w-full">
                        <input type="password" name="password_confirmation" id="password_confirmation"
                            class="peer block w-full appearance-none border-0 border-b-2 border-baseGray-light bg-transparent px-0 py-2.5 text-sm focus:border-baseOrange-light focus:outline-none focus:ring-0"
                            placeholder=" " />
                        <label for="password_confirmation"
                            class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-400 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:start-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:font-medium peer-focus:text-baseOrange-light rtl:peer-focus:translate-x-1/4">Confirmez
                            votre mot de passe</label>
                    </div>
                    @error('password')
                        <x-message color="red" message="{{ $message }}" />
                    @enderror
                    <div class="grid md:grid-cols-2 md:gap-6">
                        <div class="group relative z-0 mb-5 w-full">
                            <input type="text" name="firstname" id="firstname"
                                class="peer block w-full appearance-none border-0 border-b-2 border-baseGray-light bg-transparent px-0 py-2.5 text-sm focus:border-baseOrange-light focus:outline-none focus:ring-0"
                                placeholder=" " />
                            <label for="firstname"
                                class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-400 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:start-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:font-medium peer-focus:text-baseOrange-light rtl:peer-focus:translate-x-1/4">Nom</label>
                        </div>

                        @error('firstname')
                            <x-message color="red" message="{{ $message }}" />
                        @enderror
                        <div class="group relative z-0 mb-5 w-full">
                            <input type="text" name="lastname" id="lastname"
                                class="peer block w-full appearance-none border-0 border-b-2 border-baseGray-light bg-transparent px-0 py-2.5 text-sm focus:border-baseOrange-light focus:outline-none focus:ring-0"
                                placeholder=" " />
                            <label for="lastname"
                                class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-400 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:start-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:font-medium peer-focus:text-baseOrange-light rtl:peer-focus:translate-x-1/4">Prénoms</label>
                        </div>

                        @error('lastname')
                            <x-message color="red" message="{{ $message }}" />
                        @enderror


                    </div>
                    <div class="group mb-5 w-full">
                        <div class="flex items-center space-x-2">
                            <input id="remember_token" name="remember_token" type="checkbox" class="peer hidden" />
                            <label for="remember_token"
                                class="h-6 w-6 cursor-pointer rounded-lg border-2 border-gray-300 peer-checked:border-baseWhite peer-checked:bg-baseOrange-light peer-checked:ring-2 peer-checked:ring-baseOrange-light"></label>
                            <label for="remeber_token">Se souvenir de moi</label>
                        </div>
                    </div>
                    <div class="mt-8 flex items-center gap-8">
                        <button type="submit"
                            class="rounded-lg bg-baseOrange-light px-5 py-2.5 text-center text-sm font-medium text-white transition-all duration-300 hover:bg-baseOrange-dark focus:outline-none">S'inscrire</button>
                        <p>Vous avez déja un compte ? <br> <a href={{ route('login') }}
                                class="text-baseOrange-light underline">Se connecter</a></p>
                    </div>
                </form>
            </div>
        </div>

    </div>
</x-layouts.app>
