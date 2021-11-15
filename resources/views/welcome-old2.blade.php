@extends('layouts.master')

@section('pageTitle', 'Home')

@section('content')
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0" style="position: relative; text-align: center;">
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <div>
                        <a href="">
                            <img src="purpleFlashLogo.png" />
                        </a>
                </div>
            </div>
                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6">
                            <div class="flex items-center">
                                <div class="text-lg leading-7 font-semibold">
                                    <div class="underline text-gray-900 dark:text-white">Venues</div>
                                </div>
                            </div>

                            <div class="ml-12 col-lg-6 offset-lg-3">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Purple Flash will help you manage all aspects of your business, allowing you smooth liaison and seamless day to day running.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                            <div class="flex items-center">
                                <div class="text-lg leading-7 font-semibold"><div class="underline text-gray-900 dark:text-white">Agents</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 col-lg-6 offset-lg-3 text-gray-600 dark:text-gray-400 text-sm">
                                    Purple Flash enable you to effortlessly organise tours and one-off appearances for your artists.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 sm:text-left">
                        <div class="flex items-center">
                            <div class="ml-1">
                                &copy;2021 Purple Flash Promotions
                            </div>
                            <div class="ml-4">
                            Bringing Entertainment Together In A Flash
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection