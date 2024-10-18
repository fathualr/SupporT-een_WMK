@extends('layouts.main_admin')

@section('main')

<div class="flex flex-col gap-4">
    <h1 class="text-[2rem] text-color-1 font-bold">Data Pasien</h1>

    <button class="btn bg-color-3 w-[200px] text-white text-xl">
        <img src="{{ asset('icons/Plus_white.svg') }}" alt="">
        Tambah Data
    </button>

    <div class="bg-color-8 border-[1px] border-color-4 w-full p-5 rounded-2xl">
        <div class="overflow-x-auto h-[calc(100vh-400px)]">
        <table class="table table-xs">
            <thead>
            <tr class="text-color-1">
                <th>Id</th>
                <th>Gambar</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Jenis Kelamin</th>
                <th>Tanggal Lahir</th>
                <th>Password</th>
                <th class="text-center">Action</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th>1</th>
                <th>
                    <div class="avatar">
                        <div class="w-9 rounded-full">
                            <img src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp" />
                        </div>
                    </div>
                </th>
                <td>Cy Ganderton</td>
                <td>cygandert@gmail.com</td>
                <td>Pria</td>
                <td>9 September 2024</td>
                <td>******</td>
                <td class="flex justify-center">
                <div class="dropdown">
                    <div tabindex="0" role="button" class="btn btn-ghost">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            class="inline-block h-5 w-5 stroke-current">
                            <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"></path>
                    </svg>
                </div>
                        <ul tabindex="0" class="dropdown-content menu bg-base-100 rounded-box z-[1] w-52 p-2 shadow">
                            <li><a>Item 1</a></li>
                            <li><a>Item 2</a></li>
                        </ul>
                </div>
            </td>
            </tr>
            <tr>
                <th>1</th>
                <th>
                    <div class="avatar">
                        <div class="w-9 rounded-full">
                            <img src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp" />
                        </div>
                    </div>
                </th>
                <td>Cy Ganderton</td>
                <td>cygandert@gmail.com</td>
                <td>Pria</td>
                <td>9 September 2024</td>
                <td>******</td>
                <td class="flex justify-center">
                <div class="dropdown">
                    <div tabindex="0" role="button" class="btn btn-ghost">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            class="inline-block h-5 w-5 stroke-current">
                            <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"></path>
                    </svg>
                </div>
                        <ul tabindex="0" class="dropdown-content menu bg-base-100 rounded-box z-[1] w-52 p-2 shadow">
                            <li><a>Item 1</a></li>
                            <li><a>Item 2</a></li>
                        </ul>
                </div>
            </td>
            </tr>
            <tr>
                <th>2</th>
                <th>
                    <div class="avatar">
                        <div class="w-9 rounded-full">
                            <img src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp" />
                        </div>
                    </div>
                </th>
                <td>Cy Ganderton</td>
                <td>cygandert@gmail.com</td>
                <td>Pria</td>
                <td>9 September 2024</td>
                <td>******</td>
                <td class="flex justify-center">
                <div class="dropdown">
                    <div tabindex="0" role="button" class="btn btn-ghost">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            class="inline-block h-5 w-5 stroke-current">
                            <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"></path>
                    </svg>
                </div>
                        <ul tabindex="0" class="dropdown-content menu bg-base-100 rounded-box z-[1] w-52 p-2 shadow">
                            <li><a>Item 1</a></li>
                            <li><a>Item 2</a></li>
                        </ul>
                </div>
            </td>
            </tr>
            <tr>
                <th>3</th>
                <th>
                    <div class="avatar">
                        <div class="w-9 rounded-full">
                            <img src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp" />
                        </div>
                    </div>
                </th>
                <td>Cy Ganderton</td>
                <td>cygandert@gmail.com</td>
                <td>Pria</td>
                <td>9 September 2024</td>
                <td>******</td>
                <td class="flex justify-center">
                <div class="dropdown">
                    <div tabindex="0" role="button" class="btn btn-ghost">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            class="inline-block h-5 w-5 stroke-current">
                            <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"></path>
                    </svg>
                </div>
                        <ul tabindex="0" class="dropdown-content menu bg-base-100 rounded-box z-[1] w-52 p-2 shadow">
                            <li><a>Item 1</a></li>
                            <li><a>Item 2</a></li>
                        </ul>
                </div>
            </td>
            </tr>
            <tr>
                <th>4</th>
                <th>
                    <div class="avatar">
                        <div class="w-9 rounded-full">
                            <img src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp" />
                        </div>
                    </div>
                </th>
                <td>Cy Ganderton</td>
                <td>cygandert@gmail.com</td>
                <td>Pria</td>
                <td>9 September 2024</td>
                <td>******</td>
                <td class="flex justify-center">
                <div class="dropdown">
                    <div tabindex="0" role="button" class="btn btn-ghost">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            class="inline-block h-5 w-5 stroke-current">
                            <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"></path>
                    </svg>
                </div>
                        <ul tabindex="0" class="dropdown-content menu bg-base-100 rounded-box z-[1] w-52 p-2 shadow">
                            <li><a>Item 1</a></li>
                            <li><a>Item 2</a></li>
                        </ul>
                </div>
            </td>
            </tr>
            <tr>
                <th>5</th>
                <th>
                    <div class="avatar">
                        <div class="w-9 rounded-full">
                            <img src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp" />
                        </div>
                    </div>
                </th>
                <td>Cy Ganderton</td>
                <td>cygandert@gmail.com</td>
                <td>Pria</td>
                <td>9 September 2024</td>
                <td>******</td>
                <td class="flex justify-center">
                <div class="dropdown">
                    <div tabindex="0" role="button" class="btn btn-ghost">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            class="inline-block h-5 w-5 stroke-current">
                            <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"></path>
                    </svg>
                </div>
                        <ul tabindex="0" class="dropdown-content menu bg-base-100 rounded-box z-[1] w-52 p-2 shadow">
                            <li><a>Item 1</a></li>
                            <li><a>Item 2</a></li>
                        </ul>
                </div>
            </td>
            </tr>
            <tr>
                <th>6</th>
                <th>
                    <div class="avatar">
                        <div class="w-9 rounded-full">
                            <img src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp" />
                        </div>
                    </div>
                </th>
                <td>Cy Ganderton</td>
                <td>cygandert@gmail.com</td>
                <td>Pria</td>
                <td>9 September 2024</td>
                <td>******</td>
                <td class="flex justify-center">
                <div class="dropdown">
                    <div tabindex="0" role="button" class="btn btn-ghost">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            class="inline-block h-5 w-5 stroke-current">
                            <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"></path>
                    </svg>
                </div>
                        <ul tabindex="0" class="dropdown-content menu bg-base-100 rounded-box z-[1] w-52 p-2 shadow">
                            <li><a>Item 1</a></li>
                            <li><a>Item 2</a></li>
                        </ul>
                </div>
            </td>
            </tr>
            <tr>
                <th>7</th>
                <th>
                    <div class="avatar">
                        <div class="w-9 rounded-full">
                            <img src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp" />
                        </div>
                    </div>
                </th>
                <td>Cy Ganderton</td>
                <td>cygandert@gmail.com</td>
                <td>Pria</td>
                <td>9 September 2024</td>
                <td>******</td>
                <td class="flex justify-center">
                <div class="dropdown">
                    <div tabindex="0" role="button" class="btn btn-ghost">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            class="inline-block h-5 w-5 stroke-current">
                            <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"></path>
                    </svg>
                </div>
                        <ul tabindex="0" class="dropdown-content menu bg-base-100 rounded-box z-[1] w-52 p-2 shadow">
                            <li><a>Item 1</a></li>
                            <li><a>Item 2</a></li>
                        </ul>
                </div>
            </td>
            </tr>
            <tr>
                <th>8</th>
                <th>
                    <div class="avatar">
                        <div class="w-9 rounded-full">
                            <img src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp" />
                        </div>
                    </div>
                </th>
                <td>Cy Ganderton</td>
                <td>cygandert@gmail.com</td>
                <td>Pria</td>
                <td>9 September 2024</td>
                <td>******</td>
                <td class="flex justify-center">
                <div class="dropdown">
                    <div tabindex="0" role="button" class="btn btn-ghost">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            class="inline-block h-5 w-5 stroke-current">
                            <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"></path>
                    </svg>
                </div>
                        <ul tabindex="0" class="dropdown-content menu bg-base-100 rounded-box z-[1] w-52 p-2 shadow">
                            <li><a>Item 1</a></li>
                            <li><a>Item 2</a></li>
                        </ul>
                </div>
            </td>
            </tr>
            <tr>
                <th>9</th>
                <th>
                    <div class="avatar">
                        <div class="w-9 rounded-full">
                            <img src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp" />
                        </div>
                    </div>
                </th>
                <td>Cy Ganderton</td>
                <td>cygandert@gmail.com</td>
                <td>Pria</td>
                <td>9 September 2024</td>
                <td>******</td>
                <td class="flex justify-center">
                <div class="dropdown">
                    <div tabindex="0" role="button" class="btn btn-ghost">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            class="inline-block h-5 w-5 stroke-current">
                            <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"></path>
                    </svg>
                </div>
                        <ul tabindex="0" class="dropdown-content menu bg-base-100 rounded-box z-[1] w-52 p-2 shadow">
                            <li><a>Item 1</a></li>
                            <li><a>Item 2</a></li>
                        </ul>
                </div>
            </td>
            </tr>
            <tr>
                <th>10</th>
                <th>
                    <div class="avatar">
                        <div class="w-9 rounded-full">
                            <img src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp" />
                        </div>
                    </div>
                </th>
                <td>Cy Ganderton</td>
                <td>cygandert@gmail.com</td>
                <td>Pria</td>
                <td>9 September 2024</td>
                <td>******</td>
                <td class="flex justify-center">
                <div class="dropdown">
                    <div tabindex="0" role="button" class="btn btn-ghost">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            class="inline-block h-5 w-5 stroke-current">
                            <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"></path>
                    </svg>
                </div>
                        <ul tabindex="0" class="dropdown-content menu bg-base-100 rounded-box z-[1] w-52 p-2 shadow">
                            <li><a>Item 1</a></li>
                            <li><a>Item 2</a></li>
                        </ul>
                </div>
            </td>
            </tr>
            </tbody>
        </table>
        </div>
    </div>
    <div class="flex justify-between border-t-[1px] border-color-4 pt-4">
        <span class="text-sm text-color-2">Showing 1 to 10 of 50 entries</span>
        <div class="join">
            <button class="join-item btn">«</button>
            <button class="join-item btn">1</button>
            <button class="join-item btn">2</button>
            <button class="join-item btn bg-color-3 text-white">3</button>
            <button class="join-item btn">»</button>
        </div>
    </div>
</div>

@endsection