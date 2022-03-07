<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="firstname" value="{{ __('الأسم الأول') }}" />
                <x-jet-input id="firstname" class="block mt-1 w-full" type="text" name="name" :value="old('firstname')" required autofocus autocomplete="firstname" />
            </div>
            <div>
                <x-jet-label for="lastname" value="{{ __('الأسم الاخير') }}" />
                <x-jet-input id="lastname" class="block mt-1 w-full" type="text" name="lastname" :value="old('lastname')" required autofocus autocomplete="lastname" />
            </div>
            <div>
                <x-jet-label for="phone" value="{{ __('رقم الجوال') }}" />
                <x-jet-input id="phone" class="block mt-1 w-full" type="number" name="phone" :value="old('phone')" required autofocus autocomplete="phone" />
            </div>
            <div>
                <x-jet-label for="license" value="{{ __('رقم الرخصه') }}" />
                <x-jet-input id="license" class="block mt-1 w-full" type="text" name="license" :value="old('license')" required autofocus autocomplete="license" />
            </div>

            <div>
                <x-jet-label for="age" value="{{ __('العمر') }}" />
                <x-jet-input id="age" class="block mt-1 w-full" type="text" name="age" :value="old('age')" required autofocus autocomplete="age" />
            </div>

            <div>
                <x-jet-label for="city" value="{{ __('مدينتك') }}" />
                <x-jet-input id="city" class="block mt-1 w-full" type="text" name="city" :value="old('city')" required autofocus autocomplete="city" />
            </div>

            <select name="gender">
                <option>اختر النوع</option>
                <option>ذكر</option>
                <option>انثى</option>
            </select>
            

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('البريد الاليكترونى') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('كلمه المرور') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('تأكيد كلمه المرور') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif


            <div class="block mt-4">
                <label for="" class="flex items-center">
                    <x-jet-checkbox id="" name=""  required/>
                    <span class="ml-2 text-sm text-gray-600">{{ __('أوافق على حفظ البيانات وأتعهد بإحضار أصل المستندات التي تم رفعها على المنصه في اول يوم من برنامج التدريب') }}</span>
                </label>
            </div>
            <div class="block mt-4">
                <label for="" class="flex items-center">
                    <x-jet-checkbox id="" name=""  required/>
                    <span class="ml-2 text-sm text-gray-600">{{ __('كما أتعهد بإحضار أصل بطاقة الهوية الوطنية و اصل رخصة القياده بشكل يومي أثناء التاهيل كما اتعهد بالالتزاف بكافة قوانين السلامة المروريه') }}</span>
                </label>
            </div>


            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
