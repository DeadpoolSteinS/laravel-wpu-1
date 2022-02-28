<nav class="flex justify-end items-center text-white bg-red-500 h-[40px] leading-[30px] pr-20">
    <a href="/" class="px-4 {{ ($title === "Home") ? 'bg-white text-black rounded font-bold' : '' }}">Home</a>
    <a href="/about" class="px-4 {{ ($title === "About") ? 'bg-white text-black rounded font-bold' : '' }}">About</a>
    <a href="/blog" class="px-4 {{ ($title === "Blog") ? 'bg-white text-black rounded font-bold' : '' }}">Blog</a>
</nav>