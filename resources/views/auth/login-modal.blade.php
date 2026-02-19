 <div id="authModal" class="auth-modal" aria-hidden="true">
        <div class="auth-modal__backdrop" data-close-modal></div>
        <div class="auth-modal__panel" role="dialog" aria-modal="true">
            <div class="auth-modal__decor" aria-hidden="true">
                <div class="auth-modal__grid-bg"></div>
            </div>
            <button class="auth-modal__close" aria-label="Close modal" data-close-modal><svg viewBox="0 0 24 24">
                    <path d="M18 6L6 18M6 6l12 12" />
                </svg></button>
            <header class="auth-modal__header">
                <a href="{{ asset('') }}" class="auth-modal__brand"><img src="images/logo.png"
                        class="logo" alt="BlueChain"></a>
            </header>
            <div class="auth-modal__content">
                <div class="auth-tabs">
                    <nav class="auth-tabs__nav">
                        <button class="auth-tabs__btn is-active" data-tab="signin" data-auth-modal-trigger>Sign
                            In</button>
                        <button class="auth-tabs__btn" data-tab="signup" data-auth-modal-trigger
                            data-auth-tab="signup">Sign Up</button>
                        <div class="auth-tabs__indicator"></div>
                    </nav>
                    <div class="auth-tabs__body">
                        <div class="auth-tab-panel is-active" id="panel-signin">
                            <form method="post" action="{{ route('login') }}" class="auth-form">
                                {{ csrf_field() }}
                                <div class="auth-flash-message"></div>

                                <div class="input-group">
                                    <svg class="input-group__icon" viewBox="0 0 24 24">
                                        <path
                                            d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z" />
                                    </svg>
                                    <input type="text" name="username" value=""
                                        placeholder="Your Login" required autocomplete="username" required>
                                </div>
                                <div class="input-group">
                                    <svg class="input-group__icon" viewBox="0 0 24 24">
                                        <rect x="3" y="11" width="18" height="11" rx="2"
                                            ry="2" />
                                        <path d="M7 11V7a5 5 0 0 1 10 0v4" />
                                    </svg>
                                    <input type="password" name="password" value="" placeholder="Password"
                                        required autocomplete="password" required>
                                </div>




                                <a href="#" class="auth-form__link" id="forgotOpen">Forgot Password?</a>
                                <button type="submit" class="auth-form__submit"><i
                                        class="fa-solid fa-bolt"></i><span>Sign In Securely</span></button>
                            </form>
                            <div class="social-auth">
                                <span class="social-auth__title">Or continue with</span>

                            </div>
                        </div>


                        <div class="auth-tab-panel" id="panel-signup">
                            <form method="post" action="{{ route('registers') }}" class="auth-form">
                               @csrf
                                <div class="auth-flash-message"></div>

                                <div class="input-group">
                                    <svg class="input-group__icon" viewBox="0 0 24 24">
                                        <path
                                            d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z" />
                                    </svg>
                                    <input type="text" name="name" value="" placeholder="Your Name"
                                        required autocomplete="username" required>
                                </div>
                                <div class="input-group">
                                    <svg class="input-group__icon" viewBox="0 0 24 24">
                                        <path
                                            d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" />
                                        <polyline points="22,6 12,13 2,6" />
                                    </svg>
                                    <input type="email" name="email" value="" placeholder="Email"
                                        required autocomplete="email" required>
                                </div>
                                <div class="input-group">
                                    <svg class="input-group__icon" viewBox="0 0 24 24">
                                        <rect x="3" y="11" width="18" height="11" rx="2"
                                            ry="2" />
                                        <path d="M7 11V7a5 5 0 0 1 10 0v4" />
                                    </svg>
                                    <input type="password" name="password" placeholder="Password" required
                                        autocomplete="password" required>
                                </div>
                                <div class="input-group">
                                    <svg class="input-group__icon" viewBox="0 0 24 24">
                                        <polyline points="20 6 9 17 4 12" />
                                    </svg>
                                    <input type="password" name="password_confirmation" placeholder="Confirm Password"
                                        required autocomplete="passwordrepeat" required>
                                </div>

                                <div class="checkbox-group">
                                    <input id="rules" type="checkbox" name="rules" value="check"
                                        required>
                                    <label for="rules">I agree with<a href="#"
                                            data-modal-target="#terms-modal" class="terms-link">Rules</a></label>
                                </div>
                                {{-- <label
                                    for="rules"style="color: var(--text-color-secondary);font-size: 14px;margin-bottom: 1rem;">
                                    Upline (referrer): </a> </label> --}}





                                <button type="submit" class="auth-form__submit"><i
                                        class="fa-solid fa-user-plus"></i><span>Create Account</span></button>


                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id="forgotModal" class="bc-modal" aria-hidden="true">
        <div class="bc-modal__backdrop" data-close="1"></div>
        <div class="bc-modal__panel" role="dialog" aria-modal="true" aria-labelledby="forgotTitle">
            <div class="bc-modal__header">
                <h3 id="forgotTitle" class="bc-modal__title">Reset your password</h3>
                <button class="bc-modal__close" type="button" aria-label="Close" data-close="1">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                        <path d="M6 6l12 12M18 6L6 18" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" />
                    </svg>
                </button>
            </div>

            <div class="bc-modal__body">
                <div class="bc-help">Enter the email address associated with your account. We will send you a reset
                    link.</div>
                <form method="post" action="#" id="forgotForm" class="bc-form">
                   
                    <div class="bc-field">
                        <label class="bc-label" for="forgotEmail">Email</label>
                        <div class="bc-input">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none"
                                aria-hidden="true">
                                <path d="M4 6h16v12H4V6Z" stroke="currentColor" stroke-width="1.5" />
                                <path d="m4 7 8 6 8-6" stroke="currentColor" stroke-width="1.5" fill="none" />
                            </svg>
                            <input id="forgotEmail" name="email" type="text" value=""
                                placeholder="you@example.com" required>
                        </div>

                    </div>

                    <div id="captcha_forgot" class="bc-captcha"></div>

                    <div class="bc-actions">
                        <button type="button" class="bc-btn bc-btn--pri">Send reset link</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!-- ===== Forgot Password • Modal (JS) ===== -->
    <script>
        (function() {
            const openBtn = document.getElementById('forgotOpen');
            const authModal = document.getElementById('authModal');
            const forgotModal = document.getElementById('forgotModal');
            if (!openBtn || !forgotModal) return;

            const closeModal = () => {
                forgotModal.setAttribute('aria-hidden', 'true');
                document.body.classList.remove('bc-modal-open');
            };

            openBtn.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopImmediatePropagation();

                if (authModal && authModal.classList.contains('is-open')) {
                    authModal.classList.remove('is-open');
                    document.body.style.overflow = '';
                }

                setTimeout(() => {
                    forgotModal.setAttribute('aria-hidden', 'false');
                    document.body.classList.add('bc-modal-open');
                    const emailInput = forgotModal.querySelector('#forgotEmail');
                    if (emailInput) setTimeout(() => emailInput.focus(), 30);
                }, 10);
            }, true);


            forgotModal.addEventListener('click', function(e) {

                if (e.target.closest('[data-close]')) {
                    closeModal();
                }
            });

            document.addEventListener('keydown', function(e) {
                if (e.key === "Escape" && forgotModal.getAttribute('aria-hidden') === 'false') {
                    closeModal();
                }
            });

        })();
    </script>

    @include('partials.notify')
