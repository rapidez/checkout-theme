@php($checkoutAgreements = \Rapidez\Core\Models\CheckoutAgreement::all())

<form id="payment" class="flex flex-col gap-2" v-on:submit.prevent="save(['payment_method'], 4)">
    <div v-for="(method, index) in checkout.payment_methods">
        @include('rapidez-ct::checkout.partials.sections.payment.payment-methods')
    </div>
    
    @if (count($checkoutAgreements))
        <div>
            @foreach ($checkoutAgreements as $agreement)
                <x-rapidez::slideover position="right" id="{{ $agreement->agreement_id }}_agreement">
                    <x-slot name="title">
                        {{ $agreement->name }}
                    </x-slot>

                    @if ($agreement->is_html)
                        <div>
                            {!! $agreement->content !!}
                        </div>
                    @else
                        <div class="whitespace-pre-line">
                            {{ $agreement->content }}
                        </div>
                    @endif
                </x-rapidez::slideover>

                @if ($agreement->mode == 'AUTO')
                    <label class="text-gray-700 cursor-pointer underline hover:no-underline" for="{{ $agreement->agreement_id }}_agreement">
                        {{ $agreement->checkbox_text }}
                    </label>
                @else
                    <div>
                        <x-rapidez::checkbox
                            name="agreement_ids[]"
                            :value="$agreement->agreement_id"
                            v-model="checkout.agreement_ids"
                            dusk="agreements"
                            required
                        >
                            <label class="text-gray-700 cursor-pointer underline hover:no-underline" for="{{ $agreement->agreement_id }}_agreement">
                                {{ $agreement->checkbox_text }}
                            </label>
                        </x-rapidez::checkbox>
                    </div>
                @endif
            @endforeach
        </div>
    @endif
</form>
