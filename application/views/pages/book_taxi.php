
<section class="page-header">
                        <div class="page-header-shape"></div>
                        <div class="container">
                                <div class="page-header-info">
                                        <h4>Service Details!</h4>
                                        <h2>Feel your journey <br> with <span>American Platinum Limousine!</span></h2>
                                        <p>Everything your taxi business <br>needs
                                                is already here! </p>
                                </div>
                        </div>
                </section><div class="taxi-booking bg-grey padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <form action="book-ride.php" id="book-taxi-ride">
                    <div class="taxi-booking-form">
                        <div class="form-field">
                            <i class="las la-user-tie"></i>
                            <input type="text" id="full-name" name="full-name" class="form-control" placeholder="Your Name" required="" fdprocessedid="gzjb15">
                        </div>
                        <div class="form-field">
                            <i class="las la-envelope-open"></i>
                            <input type="email" id="email" name="email" class="form-control" placeholder="Email" required="" fdprocessedid="yphfyn">
                        </div>
                        <div class="form-field">
                            <i class="las la-tags"></i>
                            <select name="package-type" id="package-type" class="niceSelect" style="display: none;">
                                <option value="standard">Standard</option>
                                <option value="business">Business</option>
                                <option value="economy">Economy</option>
                                <option value="vip-spacial">VIP Spacial</option>
                                <option value="comfort">Comfort</option>
                            </select>
                            <div class="nice-select niceSelect" tabindex="0"><span class="current">Standard</span>
                                <ul class="list">
                                    <li data-value="standard" class="option selected">Standard</li>
                                    <li data-value="business" class="option">Business</li>
                                    <li data-value="economy" class="option">Economy</li>
                                    <li data-value="vip-spacial" class="option">VIP Spacial</li>
                                    <li data-value="comfort" class="option">Comfort</li>
                                </ul>
                            </div>
                        </div>
                        <div class="form-field">
                            <i class="las la-user-friends"></i>
                            <select name="passengers" id="passengers" class="niceSelect" style="display: none;">
                                <option value="1">1 Person</option>
                                <option value="2">2 Person</option>
                                <option value="3">3 Person</option>
                                <option value="4">4 Person</option>
                                <option value="5">5 Person</option>
                            </select>
                            <div class="nice-select niceSelect" tabindex="0"><span class="current">1 Person</span>
                                <ul class="list">
                                    <li data-value="1" class="option selected">1 Person</li>
                                    <li data-value="2" class="option">2 Person</li>
                                    <li data-value="3" class="option">3 Person</li>
                                    <li data-value="4" class="option">4 Person</li>
                                    <li data-value="5" class="option">5 Person</li>
                                </ul>
                            </div>
                        </div>
                        <div class="form-field">
                            <i class="las la-map-marker"></i>
                            <input type="text" id="start-dest" name="start-dest" class="form-control" placeholder="Start Destination" required="" fdprocessedid="ec217j">
                        </div>
                        <div class="form-field">
                            <i class="las la-map-marker"></i>
                            <input type="text" id="end-dest" name="end-dest" class="form-control" placeholder="End Destination" required="" fdprocessedid="npy7p">
                        </div>
                        <div class="form-field">
                            <i class="las la-calendar"></i>
                            <input type="text" id="ride-date" name="ride-date" class="form-control date-picker" placeholder="Select Date" required="" fdprocessedid="y5g1gf">
                        </div>
                        <div class="form-field">
                            <i class="las la-clock"></i>
                            <input type="text" id="ride-time" name="ride-time" class="form-control time-picker" placeholder="Select Time" required="" fdprocessedid="a7qmb9">
                        </div>
                        <div class="form-field">
                            <button id="submit" class="default-btn" type="submit" fdprocessedid="qpr1fn">Book Your Taxi</button>
                        </div>
                    </div>
                    <div id="form-messages" class="alert" role="alert"></div>
                </form>
            </div>
        </div>
    </div>
</div>