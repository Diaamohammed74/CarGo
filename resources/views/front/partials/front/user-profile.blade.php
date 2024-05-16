<div class="profile">
    <a href="index_profile.html" class="hi">Hi, {{ auth()->user()->first_name }}</a>
    <img src="{{ auth()->user()->image ? auth()->user()->image : asset('assets-front/images/avatar.png') }}" alt="{{ auth()->user()->first_name }}" style="width: 30px; height: 44.89px;">
</div>
