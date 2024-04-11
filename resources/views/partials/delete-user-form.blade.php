<section class="space-y-6">
    <header>
        <h2 class="text-lg font-medium text-white">
            {{ __('Удалить Аккаунт') }}
        </h2>

        <p class="mt-1 text-sm text-white">
            {{ __('После удаления вашей учетной записи все ее ресурсы и данные будут удалены без возможности восстановления. Прежде чем удалять свою учетную запись, загрузите все данные или информацию, которую вы хотите сохранить.') }}
        </p>
    </header>

    <button
    class="rounded-xl px-5  py-3 w-50 overflow-hidden border-2 shadow relative bg-indigo-700 text-white hover:bg-opacity-90 hover:bg-white hover:text-indigo-700 "
    onclick="openModal('modelConfirm')"
    >{{ __('Удалить Аккаунт') }}</button>




    <div id="modelConfirm" class="fixed hidden z-50 inset-0 bg-gray-900 bg-opacity-60 overflow-y-auto h-full w-full px-4 ">
        <div class="relative top-40 mx-auto shadow-xl rounded-md bg-white max-w-md">
    
            <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
                @csrf
                @method('delete')
    
                <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                    {{ __('Are you sure you want to delete your account?') }}
                </h2>
    
                <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                    {{ __('После удаления вашей учетной записи все ее ресурсы и данные будут удалены без возможности восстановления. Пожалуйста, введите свой пароль, чтобы подтвердить, что вы хотите навсегда удалить свою учетную запись.') }}
                </p>
    
                <div class="mt-6">
                    <input for="password" value="{{ __('Password') }}" class="sr-only" />
    
                    <input
                        id="password"
                        name="password"
                        type="password"
                        class="w-full h-12 px-3 rounded-xl"
                        placeholder="{{ __('Пароль') }}"
                    />
    
                    
                </div>
    
                <div class="mt-6 flex justify-center">
                    <button onclick="closeModal('modelConfirm')" class="rounded-xl px-5  py-3 w-50 overflow-hidden border-2 shadow relative bg-indigo-700 text-white hover:bg-opacity-90 hover:bg-white hover:text-indigo-700 ">
                        {{ __('Назад') }}
                    </button>
    
                    <button class="rounded-xl px-5  py-3 w-50 overflow-hidden border-2 shadow relative bg-red-400 text-white hover:bg-opacity-90 hover:bg-white hover:text-red-400 ">
                        {{ __('Удалить') }}
                    </button>
                </div>
            </form>
    
        </div>
    </div>



    <modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        
    </modal>
</section>


<script type="text/javascript">
    window.openModal = function(modalId) {
        document.getElementById(modalId).style.display = 'block'
        document.getElementsByTagName('body')[0].classList.add('overflow-y-hidden')
    }

    window.closeModal = function(modalId) {
        document.getElementById(modalId).style.display = 'none'
        document.getElementsByTagName('body')[0].classList.remove('overflow-y-hidden')
    }

    // Close all modals when press ESC
    document.onkeydown = function(event) {
        event = event || window.event;
        if (event.keyCode === 27) {
            document.getElementsByTagName('body')[0].classList.remove('overflow-y-hidden')
            let modals = document.getElementsByClassName('modal');
            Array.prototype.slice.call(modals).forEach(i => {
                i.style.display = 'none'
            })
        }
    };
</script>
