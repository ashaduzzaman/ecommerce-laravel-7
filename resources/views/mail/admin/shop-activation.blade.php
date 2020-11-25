@component('mail::message')
# Shop activation request

Please active shop. Here are the shop details.

Shop name: {{$shop->name}}
Shop Owner: {{$shop->owner->name}}

@component('mail::button', ['url' => url('/admin/shops')])
Manage Shops
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
