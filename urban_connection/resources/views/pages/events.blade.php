@extends('layouts.app')
@push('styles')
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
@endpush
@push('styles')
    <link href="{{ asset('css/events.css') }}" rel="stylesheet">
@endpush
    <section>
        <div class="leftBox">
            <div class="content">
                <h1>Events</h1>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla consequuntur dolor impedit deleniti quam labore quas tenetur nam voluptatibus fugiat non, nisi voluptates inventore cumque id nobis? Placeat, temporibus eum.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae, nostrum expedita sed ex mollitia eius. Dolores quos consequuntur repudiandae tempore minima necessitatibus, sequi deleniti cum, corrupti corporis, earum quibusdam tempora.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, placeat? Vel, porro vitae quas non autem ipsa eos, rerum harum fugiat asperiores delectus cum. Quae nulla atque dolorem quisquam inventore?
                </p>
            </div>
        </div>
        <div class="events">
            <ul>
                <li>
                    <div class="time">
                        <h2>
                            24<br><span>June</span>
                        </h2>
                    </div>
                    <div class="details">
                        <h3>Where does it come from</h3>
                        <p>
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Asperiores est, soluta cupiditate, nostrum adipisci dolore aperiam.
                        </p>
                        <a href="#">View Details</a>
                    </div>
                    <div style="clear:both"></div>
                </li>
                <li>
                    <div class="time">
                        <h2>
                            26<br><span>June</span>
                        </h2>
                    </div>
                    <div class="details">
                        <h3>Where does it come from</h3>
                        <p>
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Asperiores est, soluta cupiditate, nostrum adipisci dolore aperiam.
                        </p>
                        <a href="#">View Details</a>
                    </div>
                    <div style="clear:both;"></div>>
                </li>
                <li>
                    <div class="time">
                        <h2>
                            27<br><span>June</span>
                        </h2>
                    </div>
                    <div class="details">
                        <h3>Where does it come from</h3>
                        <p>
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Asperiores est, soluta cupiditate, nostrum adipisci dolore aperiam.
                        </p>
                        <a href="#">View Details</a>
                    </div>
                    <div style="clear:both;"></div>>
                </li>
                <li>
                    <div class="time">
                        <h2>
                            30<br><span>June</span>
                        </h2>
                    </div>
                    <div class="details">
                        <h3>Where does it come from</h3>
                        <p>
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Asperiores est, soluta cupiditate, nostrum adipisci dolore aperiam.
                        </p>
                        <a href="#">View Details</a>
                    </div>
                    <div style="clear:both;"></div>>
                </li>
            </ul>
        </div>
    </section>
</body>
</html>
