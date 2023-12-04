<x-tests.app>
    <x-slot name="header">ヘッダー1</x-slot>
コンポーメントテスト１
<x-tests.card title="タイトル1" content="本文１" :message="$message" />
<x-tests.card title="タイトル2" />
<x-tests.card title="CSSを変更する" class="bg-red-300" />
</x-tests.app>
