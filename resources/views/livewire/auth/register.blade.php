<div class="h-screen w-screen flex justify-center items-center"
     style="background-image: url({{asset('/static/img/scattered-forcefields.svg')}})">
    <div class="inline-block w-80">
        <div class="text-2xl text-center">注册</div>
        {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
        <form wire:submit.prevent="register">
            <div class="form-control w-full max-w-xs">
                <label class="label">
                    <span class="label-text">邮箱</span>
                </label>
                <input wire:model.lazy="email" type="text" placeholder="Type here" class="input input-bordered w-full max-w-xs" />
                @error('email')
                <label class="label">
                    <span class="label-text-alt  text-error">{{ $message }}</span>
                </label>
                @enderror
            </div>
            <div class="form-control w-full max-w-xs">
                <label class="label">
                    <span class="label-text">用户名</span>
                </label>
                <input wire:model.lazy="name" type="text" placeholder="Type here" class="input input-bordered w-full max-w-xs" />
                @error('name')
                <label class="label">
                    <span class="label-text-alt  text-error">{{ $message }}</span>
                </label>
                @enderror
            </div>
            <div class="form-control w-full max-w-xs">
                <label class="label">
                    <span class="label-text">密码</span>
                </label>
                <input wire:model.lazy="password" type="password" placeholder="Type here" class="input input-bordered w-full max-w-xs" />
                @error('password')
                <label class="label">
                    <span class="label-text-alt  text-error">{{ $message }}</span>
                </label>
                @enderror
            </div>
            <div class="form-control w-full max-w-xs">
                <label class="label">
                    <span class="label-text">确认密码</span>
                </label>
                <input wire:model.lazy="password_confirmation" type="password" placeholder="Type here" class="input input-bordered w-full max-w-xs" />
                @error('password_confirmation')
                <label class="label">
                    <span class="label-text-alt  text-error">{{ $message }}</span>
                </label>
                @enderror
            </div>
            <div class="flex justify-between mt-4">
                <a class="btn btn-link " href="{{ route('login') }}">已有账号去登录</a>
                <button class="btn">注册</button>
            </div>
        </form>
    </div>
</div>
