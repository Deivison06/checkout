<x-app-layout>
    <div class="bg-tertiary-900">
        <div class="fixed left-0 top-0 hidden lg:block h-full w-1/2 bg-tertiary-900" aria-hidden="true">

        </div>
        <div class="fixed right-0 top-0 hidden lg:block h-full w-1/2 bg-tertiary-800" aria-hidden="true">

        </div>

        <div class="relative mx-auto grid max-w-7xl grid-cols-1 lg:grid-cols-2 gap-x-16 lg:px-8 lg:pt-16">
            <section
                aria-labelledby="summary-heading"
                class="bg-tertiary-800 py-12 md:px-10 lg:col-start-2 lg:row-start-1 lg:mx-auto lg:w-full lg:max-w-lg lg:bg-transparent lg:px-0 lg:pb-24 lg:pt-0"
            >
                <div class="mx-auto max-w-2xl px-4 lg:max-w-none lg:px-0">
                    <dl>
                        <dt class="text-lg font-medium text-primary-200">Resumo</dt>
                    </dl>
                    <x-checkout.product-list>
                        <x-checkout.product-item
                            name="High Wall Tote"
                            price="200,00"
                            :features="[
                                  'White and black',
                                  '15L',
                            ]"
                            image="https://tailwindui.com/img/ecommerce-images/checkout-page-07-product-01.jpg"
                        >
                        </x-checkout.product-item>
                    </x-checkout.product-list>

                    <dl class="space-y-6 border-t border-white border-opacity-10 pt-6 text-sm font-medium">
                        <x-checkout.summary-item
                            title="Subtotal"
                            value="570,00"
                        />
                        <x-checkout.summary-item
                            title="Frete"
                            value="70,00"
                        />
                        <x-checkout.summary-item
                            title="Total"
                            value="640,00"
                            :is-last="true"
                        />
                    </dl>
                </div>
            </section>

            <section
                aria-labelledby="payment-and-shipping-heading"
                class="py-16 lg:col-start-1 lg:row-start-1 lg:mx-auto lg:w-full lg:max-w-lg lg:pb-24 lg:pt-0"
            >
                <form>
                    <div class="mx-auto max-w-2xl px-4 lg:max-w-none lg:px-0">
                        <div>
                            <x-section-title title="Informação de contato"/>
                            <div class="mt-6">
                                <x-input-label for="email-address" class="">Email address</x-input-label>
                                <div class="mt-1">
                                    <x-text-input
                                        type="email"
                                        id="email-address"
                                        name="email-address"
                                        autocomplete="email"
                                    />
                                </div>
                            </div>
                        </div>

                        <div class="mt-10">
                            <x-section-title title="Detalhes do pagamento"/>

                            <div class="mt-6 grid grid-cols-3 gap-x-4 gap-y-6 sm:grid-cols-4">
                                <div class="col-span-3 sm:col-span-4">
                                    <x-input-label for="card-number" >Numero do cartao</x-input-label>
                                    <div class="mt-1">
                                        <x-text-input
                                            type="text"
                                            id="card-number"
                                            name="card-number"
                                            autocomplete="cc-number"
                                        />
                                    </div>
                                </div>

                                <div class="col-span-2 sm:col-span-3">
                                    <x-input-label for="expiration-date" >Data de expiração (MM/YY)</x-input-label>
                                    <div class="mt-1">
                                        <x-text-input
                                            type="text"
                                            name="expiration-date"
                                            id="expiration-date"
                                            autocomplete="cc-exp"
                                        />
                                    </div>
                                </div>

                                <div>
                                    <x-input-label for="cvc" >CVC</x-input-label>
                                    <div class="mt-1">
                                        <x-text-input
                                            type="text"
                                            name="cvc"
                                            id="cvc"
                                            autocomplete="csc"
                                        />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-10">
                            <x-section-title title="Endereço" />

                            <div class="mt-6 grid grid-cols-1 gap-x-4 gap-y-6 sm:grid-cols-3">
                                <div class="sm:col-span-3">
                                    <x-input-label for="address" >Rua</x-input-label>
                                    <div class="mt-1">
                                        <x-text-input
                                            type="text"
                                            id="address"
                                            name="address"
                                            autocomplete="street-address"
                                        />
                                    </div>
                                </div>

                                <div>
                                    <x-input-label for="city" >Cidade</x-input-label>
                                    <div class="mt-1">
                                        <x-text-input
                                            type="text"
                                            id="city"
                                            name="city"
                                            autocomplete="address-level2"
                                        />
                                    </div>
                                </div>

                                <div>
                                    <x-input-label for="region" >Estado</x-input-label>
                                    <div class="mt-1">
                                        <x-text-input
                                            type="text"
                                            id="region"
                                            name="region"
                                            autocomplete="address-level1"
                                        />
                                    </div>
                                </div>

                                <div>
                                    <x-input-label for="postal-code" >CEP</x-input-label>
                                    <div class="mt-1">
                                        <x-text-input
                                            type="text"
                                            id="postal-code"
                                            name="postal-code"
                                            autocomplete="postal-code"
                                        />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-10 flex justify-end border-t border-tertiary-800-200 pt-6">
                            <button type="submit" class="rounded-md border border-transparent bg-primary-200 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:ring-offset-tertiary-800-50">
                                Comprar
                            </button>
                        </div>
                    </div>
                </form>
            </section>
        </div>

    </div>
</x-app-layout>
