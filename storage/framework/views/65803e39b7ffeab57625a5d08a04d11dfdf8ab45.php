

<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Home</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,150,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(145,55,2,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(248,250,242,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div call="page">
                <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
                    <?php if(Route::has('login')): ?>
                        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                            <?php if(auth()->guard()->check()): ?>
                                <a href="<?php echo e(url('/home')); ?>" class="text-sm text-gray-700 underline">Profile</a>
                            <?php else: ?>
                                <a href="<?php echo e(route('login')); ?>" class="text-sm text-gray-700 underline">Log in</a>

                                <?php if(Route::has('register')): ?>
                                    <a href="<?php echo e(route('register')); ?>" class="ml-4 text-sm text-gray-700 underline">Register</a>
                                <?php endif; ?>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>


                    <div class="sm:px-6">
                        <div class="flex justify-center pt-8 sm:pt-0">
                            <svg viewBox="0 0 100 120" class="h-30 w-auto text-gray-700 sm:h-30">
                                <g clip-path="url(#clip0)" fill="#004d1a">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M41.781,92.799c2.637-2.862,3.175-6.534,3.705-10.13    c1.877-12.724-1.797-23.7-10.686-32.959c-0.816-0.85-1.78-1.513-2.765-2.148c-0.667-0.43-1.147-0.469-1.193,0.515    c-0.163,3.421-2.772,4.446-5.373,5.46c-0.872,0.341-1.066-0.134-1.017-0.915c0.19-3.037,1.714-4.918,4.701-5.769    c0.18-0.051,0.344-0.158,0.572-0.266c-3.611-1.714-7.798-0.465-10.406,3.068c-1.808,2.449-2.625,5.256-2.81,8.258    c-0.068,1.109-0.011,2.228-0.146,3.356c-0.395-0.953-0.54-1.947-0.561-3.424c-0.514,1.191-0.867,1.957-1.178,2.739    c-0.781,1.966-2.403,2.948-4.245,3.687c-0.867,0.348-1.157-0.006-0.994-0.837c0.614-3.114,1.693-5.903,5.089-6.991    c1.026-0.329,1.551-1.069,1.855-2.052c1.314-4.234,1.498-4.539,4.534-7.804c-0.634,0.02-1.041,0.439-1.483,0.718    c-3.009,1.89-6.242,1.957-9.567,1.201c-0.455-0.104-1.654-0.249-0.691-1.038c2.527-2.069,5.354-4.476,8.739-3.178    c2.903,1.113,5.423,0.89,8.311,0.47c3.619-0.525,6.703,1.318,9.343,3.71c5.246,4.753,8.854,10.568,11.002,17.302    c0.12,0.376,0.25,0.749,0.474,1.096c-0.036-6.829-0.574-13.538-4.227-19.591c-0.687-1.137-1.344-1.651-2.654-0.791    c-1.643,1.079-3.43,1.086-5.259,0.357c-1.386-0.553-2.633-1.32-3.816-2.207c-0.279-0.209-0.648-0.438-0.552-0.841    c0.096-0.401,0.522-0.427,0.869-0.496c2.7-0.536,5.35-0.645,7.851,0.813c0.369,0.215,0.725,0.55,1.399,0.48    c-2.692-2.853-5.934-4.016-9.635-3.863c-2.335,0.096-4.667,0.281-7.008,0.281c-2.72,0.001-5.231-0.697-7.505-2.181    c-0.732-0.478-1.481-0.792-2.281-0.365c-3.309,1.765-5.97,0.411-8.483-1.7c-0.505-0.425-0.969-0.899-1.452-1.35    c0-0.204,0-0.407,0-0.611c3.244-0.825,6.25-0.283,9.14,1.588c-0.935-1.706-1.799-3.38-1.874-5.353    c1.148,3.556,3.199,6.324,6.664,7.883c3.134,1.41,6.4,1.171,9.748,0.74c-3.309-0.777-4.959-3.389-6.743-5.841    c-0.252-0.348-0.713-0.727-0.38-1.208c0.268-0.385,0.741-0.193,1.14-0.139c0.554,0.076,1.115,0.107,1.665,0.202    c3.383,0.581,4.577,1.736,5.33,5.352c0.218,1.043,0.529,1.667,1.744,1.592c7.986-0.501,12.457,4.11,15.515,10.743    c0.17,0.369,0.31,0.751,0.469,1.125c0.017,0.039,0.072,0.063,0.232,0.193c-0.215-2.26-0.722-4.35-1.197-6.444    c-0.698-3.075-1.415-6.142-2.647-9.065c-0.514-1.219-1.002-1.413-2.065-0.479c-1.921,1.689-5.51,1.763-7.68,0.326    c-0.828-0.548-0.241-0.921,0.14-1.3c2.372-2.362,4.561-2.664,7.975-1.201c-1.116-1.724-2.503-3.151-4.496-3.913    c-1.911-0.73-3.919-1.077-5.917-1.454c-2.771-0.523-5.256-1.583-7.182-3.718c-0.593-0.658-1.322-0.877-2.177-0.904    c-4.39-0.14-5.69-1.041-7.099-6.01c-0.105-0.37-0.348-0.826,0.021-1.15c0.374-0.329,0.778-0.008,1.126,0.157    c1.743,0.826,3.491,1.648,5.308,3.243c-0.491-3.116-0.564-5.833,1.06-8.291c-1.348,4.485-1.039,8.665,2.223,12.269    c2.426,2.681,5.696,3.301,9.149,3.66c-0.136-0.702-0.683-0.865-1.064-1.13c-2.733-1.902-4.022-4.639-4.598-7.801    c-0.072-0.397-0.215-0.86,0.126-1.157c0.376-0.326,0.773-0.012,1.111,0.188c1.54,0.911,2.993,1.941,4.141,3.332    c1.193,1.446,1.681,3.106,1.406,4.981c-0.139,0.946-0.196,1.851,1.069,2.139c4.74,1.08,7.405,4.415,9.151,8.637    c1.834,4.437,2.826,9.122,3.809,13.801c0.101,0.481,0.205,0.962,0.308,1.444c0.152-0.009,0.304-0.017,0.455-0.025    c0-6.914-0.024-13.828,0.021-20.742c0.009-1.311-0.577-2.043-1.734-2.314c-4.152-0.973-5.323-4.96-5.609-8.675    c-0.09-1.165,0.511-0.979,1.209-0.528c2.774,1.795,4.647,4.213,5.298,7.509c0.1,0.506,0.03,1.122,0.852,1.594    c0-1.15-0.022-2.143,0.005-3.134c0.078-2.897-0.085-5.799,0.204-8.691c0.098-0.98-0.2-1.614-1.275-1.902    c-3.164-0.851-4.797-3.439-6.473-5.938c-0.502-0.748-0.075-1.02,0.676-0.935c2.855,0.323,5.775,0.538,7.168,3.832    c0-1.5,0-3.001,0-4.502c0.978,4.133,0.445,8.336,0.894,12.637c1.26-3.859,4.487-4.073,7.664-4.375    c0.496-0.047,1.075-0.241,1.388,0.298c0.259,0.448-0.098,0.881-0.306,1.272c-2.21,4.152-4.266,5.015-7.449,4.404    c-1.135-0.218-1.469,0.39-1.471,1.363c-0.002,1.425-0.031,2.85,0.02,4.273c0.307,8.477,0.239,16.959,0.407,25.454    c0.76-3.467,1.516-6.928,2.464-10.342c0.721-2.599,1.492-5.18,2.767-7.58c1.798-3.384,4.327-5.895,8.165-6.811    c1.033-0.247,1.486-0.787,1.297-1.839c-0.531-2.958,0.788-5.129,2.987-6.891c0.792-0.634,1.658-1.177,2.509-1.733    c0.33-0.216,0.737-0.516,1.114-0.214c0.354,0.283,0.215,0.754,0.143,1.152c-0.576,3.161-1.848,5.913-4.594,7.798    c-0.374,0.256-0.722,0.55-1.133,0.865c7.212,0.697,14.824-5.959,11.207-15.948c1.444,1.728,1.766,3.948,1.2,8.694    c1.625-1.55,3.492-2.437,5.357-3.323c0.355-0.169,0.762-0.481,1.138-0.198c0.396,0.298,0.157,0.768,0.054,1.139    c-1.398,4.986-2.711,5.904-7.07,6.045c-0.91,0.03-1.684,0.261-2.313,0.961c-1.889,2.1-4.351,3.106-7.054,3.648    c-1.595,0.32-3.198,0.615-4.771,1.023c-2.503,0.649-4.373,2.164-5.708,4.473c2.996-1.975,5.546-1.048,7.948,1.016    c0.813,0.699,0.867,1.217-0.279,1.551c-0.586,0.171-1.158,0.388-1.746,0.547c-2.07,0.56-4.031,0.571-5.629-1.169    c-0.854-0.931-1.374-0.677-1.844,0.42c-1.815,4.243-2.682,8.738-3.573,13.226c-0.136,0.683-0.42,1.365-0.206,2.402    c1.044-2.455,2.1-4.62,3.634-6.499c2.891-3.54,6.498-5.615,11.189-5.533c3.148,0.055,2.602,0.13,3.261-2.54    c0.756-3.063,4.345-5.243,7.453-4.651c0.88,0.167,0.583,0.688,0.277,1.111c-1.847,2.548-3.489,5.336-7.177,6.026    c5.914,1.35,13.525,0.169,16.508-8.235c-0.122,2.116-0.996,3.502-1.975,5.02c0.823,0.081,1.253-0.395,1.725-0.662    c2.089-1.185,4.314-1.425,6.644-1.061c1.063,0.167,1.197,0.633,0.418,1.358c-2.684,2.498-5.489,4.505-9.387,2.494    c-0.667-0.345-1.371-0.225-2.021,0.219c-2.714,1.854-5.749,2.375-8.988,2.371c-2.99-0.003-5.971-0.696-8.974-0.073    c-2.501,0.518-4.596,1.67-6.265,3.637c2.12-1.055,4.253-1.952,6.683-1.634c1.133,0.148,2.923-0.126,3.153,0.846    c0.257,1.083-1.484,1.565-2.443,2.151c-2.396,1.465-4.895,2.019-7.451,0.319c-0.899-0.598-1.491-0.239-2.023,0.549    c-1.646,2.44-2.651,5.15-3.341,7.98c-0.98,4.022-1.272,8.123-1.238,12.276c1.246-3.826,2.797-7.509,5.007-10.869    c2.586-3.933,5.453-7.632,9.666-9.984c2.926-1.634,6.008-2.202,9.222-0.857c1.041,0.435,2.036,0.34,2.917-0.229    c2.676-1.726,5.308-1.428,7.924,0.061c1.014,0.576,1.975,1.249,2.939,1.906c0.283,0.192,0.657,0.421,0.607,0.816    c-0.066,0.527-0.602,0.493-0.964,0.573c-3.329,0.74-6.564,0.694-9.566-1.209c-0.452-0.287-0.935-0.526-1.484-0.707    c2.413,2.157,3.743,4.886,4.517,7.945c0.237,0.942,0.888,1.585,1.832,1.886c3.401,1.084,4.494,3.861,5.113,6.978    c0.199,1.002-0.238,1.176-1.104,0.826c-1.906-0.77-3.494-1.864-4.243-3.897c-0.258-0.701-0.583-1.379-0.966-2.274    c-0.197,1.151-0.354,2.069-0.512,2.987c-0.228-2.298-0.338-4.573-0.966-6.782c-0.989-3.483-2.809-6.301-6.251-7.823    c-1.937-0.855-4.154-0.832-6.198,0.069c0.164,0.408,0.562,0.349,0.876,0.429c2.528,0.651,4.48,3.342,4.326,5.938    c-0.043,0.709-0.354,0.827-0.998,0.691c-2.885-0.608-4.859-2.512-5.386-5.448c-0.222-1.24-0.729-0.955-1.422-0.493    c-3.154,2.102-5.53,4.956-7.538,8.097c-6.46,10.107-7.908,20.952-4.557,32.452c0.485,1.665,1.078,3.283,2.242,4.622    C52.565,92.799,47.173,92.799,41.781,92.799z"></path>
                                </g>
                            </svg>
                        </div>
                        <div class="flex dark:bg-gray-800 sm:rounded-lg">
                                <div class="p-6">
                                    <div class="flex items-center">
                                        <div class="text-lg leading-7 font-semibold">
                                            <a href="" class="underline text-gray-900 dark:text-white">Checklist</a>
                                        </div>
                                    </div>
                                    <div class="ml-12">
                                        <div class="mt-2">
                                        </div>
                                    </div>
                                </div>

                                <div class="p-6">
                                    <div class="flex items-center">
                                        <div class="text-lg leading-7 font-semibold">
                                            <a href="" class="underline text-gray-900 dark:text-white">About</a>
                                        </div>
                                    </div>
                                    <div class="ml-12">
                                        <div class="mt-2">
                                            </div>
                                    </div>
                                </div>

                                <div class="p-6">
                                    <div class="flex items-center">
                                        <div class="text-lg leading-7 font-semibold">
                                            <a href="" class="underline text-gray-900 dark:text-white">Contacts</a>
                                        </div>
                                    </div>
                                    <div class="ml-12">
                                        <div class="mt-2">
                                            </div>
                                    </div>
                                </div>
                         </div>


                        <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                            <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                                Laravel v<?php echo e(Illuminate\Foundation\Application::VERSION); ?> (PHP v<?php echo e(PHP_VERSION); ?>)
                            </div>
                        </div>

                    </div>
                </div>

        </div>
    </body>
</html>
<?php /**PATH C:\xampp1\htdocs\gandtapp\resources\views/welcome.blade.php ENDPATH**/ ?>