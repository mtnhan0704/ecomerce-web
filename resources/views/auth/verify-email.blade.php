<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <img src="images/logo-black-ad.png" alt="Logo">
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Trước khi tiếp tục, bạn có thể xác minh địa chỉ email của mình bằng cách nhấp vào liên kết chúng tôi vừa gửi cho bạn qua email không? Nếu bạn không nhận được email, chúng tôi sẽ sẵn lòng gửi cho bạn một email khác.') }}
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ __('Một liên kết xác minh mới đã được gửi đến địa chỉ email bạn đã cung cấp trong cài đặt hồ sơ của mình.') }}
            </div>
        @endif

        <div class="mt-4 flex items-center justify-between">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf

                <div>
                    <x-button type="submit">
                        {{ __('Gửi lại email xác minh') }}
                    </x-button>
                </div>
            </form>

            <div>
                <a href="{{ route('profile.show') }}"
                    class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    {{ __('Sửa thông tin') }}</a>

                <form method="POST" action="{{ route('logout') }}" class="inline">
                    @csrf

                    <button type="submit"
                        class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 ml-2">
                        {{ __('Đăng xuất') }}
                    </button>
                </form>
            </div>
        </div>
    </x-authentication-card>
</x-guest-layout>
