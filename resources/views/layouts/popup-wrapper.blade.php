<!-- Newsletter Popup Start -->
        <div class="popup_wrapper">
            <div class="test">
                <button class="popup_off">Закрити</button>
               
                <div class="subscribe_area text-center mt-60">
                    <h2>Підписка</h2>
                    <p>Підпишіться на розсилку Eлектрон, щоб отримувати оновлення, спеціальні пропозиції та іншу інформацію про знижки.</p>
                    <div class="subscribe-form-group">
                        
                        <form  method="POST" action="{{route('contact.buy')}}">
                             @if (auth()->check())
                                <input class="form-control" type="email" name="email" placeholder="{{ Auth::user()->email }}">
                                @else
                                <input class="form-control" type="email" name="email" placeholder="Введіть адресу електронної пошти">
                            @endif

                                @csrf
                            <button type="submit">підписатися</button>
                        </form>
                    </div>
                    <div class="subscribe-bottom mt-15">
                        <input type="checkbox" id="newsletter-permission">
                        <label for="newsletter-permission">Більше не показувати це спливаюче вікно</label>
                    </div>
                </div>
            </div>
        </div>
        <!-- Newsletter Popup End -->
