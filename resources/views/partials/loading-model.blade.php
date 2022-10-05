<!-- loading indicator -->
<div x-data x-init="
	$watch('$store.loading.open', value => {
	if (value === true) { document.body.classList.add('overflow-hidden') }
	else { document.body.classList.remove('overflow-hidden') }
	});" id="loadingIndicator" x-show="$store.loading.open" class="fixed inset-0 z-50 overflow-y-auto" x-cloak>
    <div class="flex items-end justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
        <div x-show="$store.loading.open" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-black opacity-50"></div>
        </div>

        <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>&#8203;
        <div x-show="$store.loading.open" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" class="inline-block px-4 pt-5 pb-4 overflow-hidden text-left align-bottom transition-all transform bg-white rounded-lg shadow-xl sm:my-8 sm:align-middle sm:max-w-lg sm:w-full sm:p-6" role="dialog">
            <div class="flex flex-col justify-between items-center w-full mt-2">
                <div style="border-top-color:transparent" class="mb-8 w-24 h-24 border-8 border-wave-500 border-dotted rounded-full animate-spin"></div>
                <p class="text-gray-600">Wait... Creating a beautiful data rich report for you!</p>
            </div>
        </div>
    </div>
</div>
<!-- END loading indicator -->