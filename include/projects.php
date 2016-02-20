<div class="mdl-layout__tab-panel" id="projects">
    <section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
        <div class="mdl-card mdl-cell mdl-cell--12-col">
            <div class="mdl-card__supporting-text mdl-grid mdl-grid--no-spacing">
                <div class="project-icon-container mdl-cell mdl-cell--2-col mdl-cell--1-col-phone">
                    <div class="project-icon">
                        <img src="/images/alltime_launcher_new.png">
                    </div>
                </div>
                <div
                    class="section__text mdl-cell mdl-cell--9-col-desktop mdl-cell--6-col-tablet mdl-cell--3-col-phone">
                    <h4>AllTime</h4>
                    You can see the website I made for it <a href="https://alltimeapp.com">here</a>. The app was
                    designed and initially developed by my dad, however, I'm in the process of a ground-up rewrite to
                    take advantage of the latest Android libraries and Material Design. Some images of the new design
                    are linked below, but the current version of the app canb be found on the
                    <a href="https://play.google.com/store/apps/developer?id=Jarrett+Software+Solutions">Google Play
                        Store</a>.
                </div>
                <div class="mdl-card__actions mdl-card--border">
                    <button id="show-dialog" type="button"
                            class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                        Show Images
                    </button>
                    <dialog class="mdl-dialog">
                        <img src="/images/alltime1.png">
                        <img src="/images/alltime2.png">
                        <img src="/images/alltime3.png">

                        <div class="mdl-dialog__actions">
                            <button type="button" class="mdl-button close mdl-dialog__actions--full-width">Close
                            </button>
                        </div>
                    </dialog>
                    <script>
                        var dialog = document.querySelector('dialog');
                        var showDialogButton = document.querySelector('#show-dialog');
                        if (!dialog.showModal) {
                            dialogPolyfill.registerDialog(dialog);
                        }
                        showDialogButton.addEventListener('click', function () {
                            dialog.showModal();
                        });
                        dialog.querySelector('.close').addEventListener('click', function () {
                            dialog.close();
                        });
                    </script>
                </div>
            </div>
        </div>
    </section>

    <section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
        <div class="mdl-card mdl-cell mdl-cell--12-col">
            <div class="mdl-card__supporting-text mdl-grid mdl-grid--no-spacing">
                <div
                    class="section__text mdl-cell mdl-cell--9-col-desktop mdl-cell--6-col-tablet mdl-cell--3-col-phone">
                    <h4>TnyClick</h4>
                    Image & text uploading service. I originally wrote a full desktop client in Java to
                    capture and upload images too, but ended up scraping that to use <a href="https://getsharex.com/">ShareX</a>
                    for windows, and scrot on linux. While I could just as easily upload to Imgur, I wanted the ability
                    to control where my images were uploaded, and be more flexible.
                </div>
            </div>
        </div>
    </section>

    <section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
        <div class="mdl-card mdl-cell mdl-cell--12-col">
            <div class="mdl-card__supporting-text mdl-grid mdl-grid--no-spacing">
                <div
                    class="section__text mdl-cell mdl-cell--9-col-desktop mdl-cell--6-col-tablet mdl-cell--3-col-phone">
                    <h4>Proof of Concepts & Experiments</h4>
                    <ul class="mdl-list">
                        <li class="mdl-list__item mdl-list__item--three-line">
                            <span class="mdl-list__item-primary-content">
                                <span>TnyClip</span>
                                <span class="mdl-list__item-text-body">
                                    A cross-platform clipboard syncing service using Google's cloud messaging.
                                    Uses an Android app and Chrome extension that listen for clipboard change events and
                                    relays the text to other clients.
                              </span>
                            </span>
                        </li>
                        <li class="mdl-list__item mdl-list__item--three-line">
                            <span class="mdl-list__item-primary-content">
                                <span>TnyBot</span>
                                <span class="mdl-list__item-text-body">
                                    IRC chat & twitch bot written in Java.
                                </span>
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</div>