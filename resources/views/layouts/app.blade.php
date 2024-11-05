<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>{{ getenv('APP_NAME') }}</title>
    <meta name="description" content="UI/ Visual Designer">
    <meta name="keywords" content=".">
    <meta name="robots" content="index, follow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <link rel="stylesheet" href="{{ asset('styles/global.css') }}">
    <link rel="icon" type="image/png" href="{{ asset('images/Asset 4@4x 1.png') }}" sizes="any">
    <!-- In the head section of your layout -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <!-- Before the closing body tag -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>


    {{-- @vite('resources/css/app.css') --}}
    <style>
        @import "https://fonts.googleapis.com/css2?family=Caudex:ital,wght@0,400;0,700;1,400;1,700&display=swap";
*,
:before,
:after {
    box-sizing: border-box;
    border-width: 0;
    border-style: solid;
    border-color: #e5e7eb;
}
:before,
:after {
    --tw-content: "";
}
html,
:host {
    line-height: 1.5;
    -webkit-text-size-adjust: 100%;
    -moz-tab-size: 4;
    -o-tab-size: 4;
    tab-size: 4;
    font-family: ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji",
        "Segoe UI Emoji", Segoe UI Symbol, "Noto Color Emoji";
    font-feature-settings: normal;
    font-variation-settings: normal;
    -webkit-tap-highlight-color: transparent;
}
body {
    margin: 0;
    line-height: inherit;
}
hr {
    height: 0;
    color: inherit;
    border-top-width: 1px;
}
abbr:where([title]) {
    -webkit-text-decoration: underline dotted;
    text-decoration: underline dotted;
}
h1,
h2,
h3,
h4,
h5,
h6 {
    font-size: inherit;
    font-weight: inherit;
}
a {
    color: inherit;
    text-decoration: inherit;
}
b,
strong {
    font-weight: bolder;
}
code,
kbd,
samp,
pre {
    font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas,
        Liberation Mono, Courier New, monospace;
    font-feature-settings: normal;
    font-variation-settings: normal;
    font-size: 1em;
}
small {
    font-size: 80%;
}
sub,
sup {
    font-size: 75%;
    line-height: 0;
    position: relative;
    vertical-align: baseline;
}
sub {
    bottom: -0.25em;
}
sup {
    top: -0.5em;
}
table {
    text-indent: 0;
    border-color: inherit;
    border-collapse: collapse;
}
button,
input,
optgroup,
select,
textarea {
    font-family: inherit;
    font-feature-settings: inherit;
    font-variation-settings: inherit;
    font-size: 100%;
    font-weight: inherit;
    line-height: inherit;
    color: inherit;
    margin: 0;
    padding: 0;
}
button,
select {
    text-transform: none;
}
button,
[type="button"],
[type="reset"],
[type="submit"] {
    -webkit-appearance: button;
    background-color: transparent;
    background-image: none;
}
:-moz-focusring {
    outline: auto;
}
:-moz-ui-invalid {
    box-shadow: none;
}
progress {
    vertical-align: baseline;
}
::-webkit-inner-spin-button,
::-webkit-outer-spin-button {
    height: auto;
}
[type="search"] {
    -webkit-appearance: textfield;
    outline-offset: -2px;
}
::-webkit-search-decoration {
    -webkit-appearance: none;
}
::-webkit-file-upload-button {
    -webkit-appearance: button;
    font: inherit;
}
summary {
    display: list-item;
}
blockquote,
dl,
dd,
h1,
h2,
h3,
h4,
h5,
h6,
hr,
figure,
p,
pre {
    margin: 0;
}
fieldset {
    margin: 0;
    padding: 0;
}
legend {
    padding: 0;
}
ol,
ul,
menu {
    list-style: none;
    margin: 0;
    padding: 0;
}
dialog {
    padding: 0;
}
textarea {
    resize: vertical;
}
input::-moz-placeholder,
textarea::-moz-placeholder {
    opacity: 1;
    color: #9ca3af;
}
input::placeholder,
textarea::placeholder {
    opacity: 1;
    color: #9ca3af;
}
button,
[role="button"] {
    cursor: pointer;
}
:disabled {
    cursor: default;
}
img,
svg,
video,
canvas,
audio,
iframe,
embed,
object {
    display: block;
    vertical-align: middle;
}
img,
video {
    max-width: 100%;
    height: auto;
}
[hidden] {
    display: none;
}
*,
:before,
:after {
    --tw-border-spacing-x: 0;
    --tw-border-spacing-y: 0;
    --tw-translate-x: 0;
    --tw-translate-y: 0;
    --tw-rotate: 0;
    --tw-skew-x: 0;
    --tw-skew-y: 0;
    --tw-scale-x: 1;
    --tw-scale-y: 1;
    --tw-pan-x: ;
    --tw-pan-y: ;
    --tw-pinch-zoom: ;
    --tw-scroll-snap-strictness: proximity;
    --tw-gradient-from-position: ;
    --tw-gradient-via-position: ;
    --tw-gradient-to-position: ;
    --tw-ordinal: ;
    --tw-slashed-zero: ;
    --tw-numeric-figure: ;
    --tw-numeric-spacing: ;
    --tw-numeric-fraction: ;
    --tw-ring-inset: ;
    --tw-ring-offset-width: 0px;
    --tw-ring-offset-color: #fff;
    --tw-ring-color: rgb(59 130 246 / 0.5);
    --tw-ring-offset-shadow: 0 0 #0000;
    --tw-ring-shadow: 0 0 #0000;
    --tw-shadow: 0 0 #0000;
    --tw-shadow-colored: 0 0 #0000;
    --tw-blur: ;
    --tw-brightness: ;
    --tw-contrast: ;
    --tw-grayscale: ;
    --tw-hue-rotate: ;
    --tw-invert: ;
    --tw-saturate: ;
    --tw-sepia: ;
    --tw-drop-shadow: ;
    --tw-backdrop-blur: ;
    --tw-backdrop-brightness: ;
    --tw-backdrop-contrast: ;
    --tw-backdrop-grayscale: ;
    --tw-backdrop-hue-rotate: ;
    --tw-backdrop-invert: ;
    --tw-backdrop-opacity: ;
    --tw-backdrop-saturate: ;
    --tw-backdrop-sepia: ;
}
::backdrop {
    --tw-border-spacing-x: 0;
    --tw-border-spacing-y: 0;
    --tw-translate-x: 0;
    --tw-translate-y: 0;
    --tw-rotate: 0;
    --tw-skew-x: 0;
    --tw-skew-y: 0;
    --tw-scale-x: 1;
    --tw-scale-y: 1;
    --tw-pan-x: ;
    --tw-pan-y: ;
    --tw-pinch-zoom: ;
    --tw-scroll-snap-strictness: proximity;
    --tw-gradient-from-position: ;
    --tw-gradient-via-position: ;
    --tw-gradient-to-position: ;
    --tw-ordinal: ;
    --tw-slashed-zero: ;
    --tw-numeric-figure: ;
    --tw-numeric-spacing: ;
    --tw-numeric-fraction: ;
    --tw-ring-inset: ;
    --tw-ring-offset-width: 0px;
    --tw-ring-offset-color: #fff;
    --tw-ring-color: rgb(59 130 246 / 0.5);
    --tw-ring-offset-shadow: 0 0 #0000;
    --tw-ring-shadow: 0 0 #0000;
    --tw-shadow: 0 0 #0000;
    --tw-shadow-colored: 0 0 #0000;
    --tw-blur: ;
    --tw-brightness: ;
    --tw-contrast: ;
    --tw-grayscale: ;
    --tw-hue-rotate: ;
    --tw-invert: ;
    --tw-saturate: ;
    --tw-sepia: ;
    --tw-drop-shadow: ;
    --tw-backdrop-blur: ;
    --tw-backdrop-brightness: ;
    --tw-backdrop-contrast: ;
    --tw-backdrop-grayscale: ;
    --tw-backdrop-hue-rotate: ;
    --tw-backdrop-invert: ;
    --tw-backdrop-opacity: ;
    --tw-backdrop-saturate: ;
    --tw-backdrop-sepia: ;
}
.container {
    width: 100%;
}
@media (min-width: 640px) {
    .container {
        max-width: 640px;
    }
}
@media (min-width: 768px) {
    .container {
        max-width: 768px;
    }
}
@media (min-width: 1024px) {
    .container {
        max-width: 1024px;
    }
}
@media (min-width: 1280px) {
    .container {
        max-width: 1280px;
    }
}
@media (min-width: 1536px) {
    .container {
        max-width: 1536px;
    }
}
.visible {
    visibility: visible;
}
.fixed {
    position: fixed;
}
.absolute {
    position: absolute;
}
.relative {
    position: relative;
}
.-right-5 {
    right: -1.25rem;
}
.-top-5 {
    top: -1.25rem;
}
.left-0 {
    left: 0;
}
.left-5 {
    left: 1.25rem;
}
.right-0 {
    right: 0;
}
.top-0 {
    top: 0;
}
.top-48 {
    top: 12rem;
}
.z-0 {
    z-index: 0;
}
.z-50 {
    z-index: 50;
}
.z-\[1000\] {
    z-index: 1000;
}
.z-\[100\] {
    z-index: 100;
}
.m-0 {
    margin: 0;
}
.my-20 {
    margin-top: 5rem;
    margin-bottom: 5rem;
}
.-mt-1 {
    margin-top: -0.25rem;
}
.-mt-2 {
    margin-top: -0.5rem;
}
.-mt-4 {
    margin-top: -1rem;
}
.-mt-5 {
    margin-top: -1.25rem;
}
.mb-0 {
    margin-bottom: 0;
}
.mb-12 {
    margin-bottom: 3rem;
}
.mb-20 {
    margin-bottom: 5rem;
}
.mb-3 {
    margin-bottom: 0.75rem;
}
.mb-4 {
    margin-bottom: 1rem;
}
.mb-6 {
    margin-bottom: 1.5rem;
}
.mb-8 {
    margin-bottom: 2rem;
}
.mb-96 {
    margin-bottom: 24rem;
}
.mb-\[2px\] {
    margin-bottom: 2px;
}
.mt-0 {
    margin-top: 0;
}
.mt-10 {
    margin-top: 2.5rem;
}
.mt-16 {
    margin-top: 4rem;
}
.mt-20 {
    margin-top: 5rem;
}
.mt-28 {
    margin-top: 7rem;
}
.mt-3 {
    margin-top: 0.75rem;
}
.mt-4 {
    margin-top: 1rem;
}
.mt-5 {
    margin-top: 1.25rem;
}
.mt-6 {
    margin-top: 1.5rem;
}
.mt-7 {
    margin-top: 1.75rem;
}
.mt-8 {
    margin-top: 2rem;
}
.block {
    display: block;
}
.inline {
    display: inline;
}
.flex {
    display: flex;
}
.hidden {
    display: none;
}
.h-\[352px\] {
    height: 352px;
}
.h-\[373\.54px\] {
    height: 373.54px;
}
.h-\[586px\] {
    height: 586px;
}
.h-\[600px\] {
    height: 600px;
}
.h-\[700px\] {
    height: 700px;
}
.h-\[730px\] {
    height: 730px;
}
.h-\[736px\] {
    height: 736px;
}
.h-screen {
    height: 100vh;
}
.min-h-screen {
    min-height: 100vh;
}
.w-1\/2 {
    width: 50%;
}
.w-20 {
    width: 5rem;
}
.w-48 {
    width: 12rem;
}
.w-\[258px\] {
    width: 258px;
}
.w-\[334px\] {
    width: 334px;
}
.w-\[342px\] {
    width: 342px;
}
.w-\[350px\] {
    width: 350px;
}
.w-\[375px\] {
    width: 375px;
}
.w-\[398px\] {
    width: 398px;
}
.w-\[400px\] {
    width: 400px;
}
.w-\[510px\] {
    width: 510px;
}
.w-\[516px\] {
    width: 516px;
}
.w-\[655px\] {
    width: 655px;
}
.w-\[70\%\] {
    width: 70%;
}
.w-\[700px\] {
    width: 700px;
}
.w-\[80\%\] {
    width: 80%;
}
.w-\[95\%\] {
    width: 95%;
}
.w-fit {
    width: -moz-fit-content;
    width: fit-content;
}
.w-full {
    width: 100%;
}
.max-w-\[1440px\] {
    max-width: 1440px;
}
.max-w-\[1520px\] {
    max-width: 1520px;
}
.max-w-sm {
    max-width: 24rem;
}
.grow {
    flex-grow: 1;
}
.translate-x-\[500px\] {
    --tw-translate-x: 500px;
    transform: translate(var(--tw-translate-x), var(--tw-translate-y))
        rotate(var(--tw-rotate)) skew(var(--tw-skew-x)) skewY(var(--tw-skew-y))
        scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}
.transform {
    transform: translate(var(--tw-translate-x), var(--tw-translate-y))
        rotate(var(--tw-rotate)) skew(var(--tw-skew-x)) skewY(var(--tw-skew-y))
        scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}
@keyframes bounce {
    0%,
    to {
        transform: translateY(-25%);
        animation-timing-function: cubic-bezier(0.8, 0, 1, 1);
    }
    50% {
        transform: none;
        animation-timing-function: cubic-bezier(0, 0, 0.2, 1);
    }
}
.animate-bounce {
    animation: bounce 1s infinite;
}
.cursor-pointer {
    cursor: pointer;
}
.flex-row {
    flex-direction: row;
}
.flex-col {
    flex-direction: column;
}
.flex-wrap {
    flex-wrap: wrap;
}
.items-start {
    align-items: flex-start;
}
.items-end {
    align-items: flex-end;
}
.items-center {
    align-items: center;
}
.justify-end {
    justify-content: flex-end;
}
.justify-center {
    justify-content: center;
}
.justify-between {
    justify-content: space-between;
}
.gap-1 {
    gap: 0.25rem;
}
.gap-10 {
    gap: 2.5rem;
}
.gap-12 {
    gap: 3rem;
}
.gap-16 {
    gap: 4rem;
}
.gap-2 {
    gap: 0.5rem;
}
.gap-20 {
    gap: 5rem;
}
.gap-3 {
    gap: 0.75rem;
}
.gap-4 {
    gap: 1rem;
}
.gap-5 {
    gap: 1.25rem;
}
.gap-6 {
    gap: 1.5rem;
}
.gap-8 {
    gap: 2rem;
}
.gap-y-10 {
    row-gap: 2.5rem;
}
.space-y-4 > :not([hidden]) ~ :not([hidden]) {
    --tw-space-y-reverse: 0;
    margin-top: calc(1rem * calc(1 - var(--tw-space-y-reverse)));
    margin-bottom: calc(1rem * var(--tw-space-y-reverse));
}
.rounded {
    border-radius: 0.25rem;
}
.rounded-2xl {
    border-radius: 1rem;
}
.rounded-3xl {
    border-radius: 1.5rem;
}
.rounded-\[36px\] {
    border-radius: 36px;
}
.rounded-\[40px\] {
    border-radius: 40px;
}
.rounded-full {
    border-radius: 9999px;
}
.rounded-lg {
    border-radius: 0.5rem;
}
.border {
    border-width: 1px;
}
.border-b {
    border-bottom-width: 1px;
}
.border-\[\#B3B1B1\] {
    --tw-border-opacity: 1;
    border-color: rgb(179 177 177 / var(--tw-border-opacity));
}
.border-\[\#D9D9D9\] {
    --tw-border-opacity: 1;
    border-color: rgb(217 217 217 / var(--tw-border-opacity));
}
.border-black {
    --tw-border-opacity: 1;
    border-color: rgb(0 0 0 / var(--tw-border-opacity));
}
.border-gray-200 {
    --tw-border-opacity: 1;
    border-color: rgb(229 231 235 / var(--tw-border-opacity));
}
.border-gray-500 {
    --tw-border-opacity: 1;
    border-color: rgb(107 114 128 / var(--tw-border-opacity));
}
.bg-\[\#000\] {
    --tw-bg-opacity: 1;
    background-color: rgb(0 0 0 / var(--tw-bg-opacity));
}
.bg-\[\#00444B\] {
    --tw-bg-opacity: 1;
    background-color: rgb(0 68 75 / var(--tw-bg-opacity));
}
.bg-\[\#080404\] {
    --tw-bg-opacity: 1;
    background-color: rgb(8 4 4 / var(--tw-bg-opacity));
}
.bg-\[\#212121\] {
    --tw-bg-opacity: 1;
    background-color: rgb(33 33 33 / var(--tw-bg-opacity));
}
.bg-\[\#222424\] {
    --tw-bg-opacity: 1;
    background-color: rgb(34 36 36 / var(--tw-bg-opacity));
}
.bg-\[\#2C2A2A\] {
    --tw-bg-opacity: 1;
    background-color: rgb(44 42 42 / var(--tw-bg-opacity));
}
.bg-\[\#4B4B4B\] {
    --tw-bg-opacity: 1;
    background-color: rgb(75 75 75 / var(--tw-bg-opacity));
}
.bg-\[\#5F9396\] {
    --tw-bg-opacity: 1;
    background-color: rgb(95 147 150 / var(--tw-bg-opacity));
}
.bg-\[\#D9D9D9\] {
    --tw-bg-opacity: 1;
    background-color: rgb(217 217 217 / var(--tw-bg-opacity));
}
.bg-\[\#DB0011\] {
    --tw-bg-opacity: 1;
    background-color: rgb(219 0 17 / var(--tw-bg-opacity));
}
.bg-\[\#F4F4F4\] {
    --tw-bg-opacity: 1;
    background-color: rgb(244 244 244 / var(--tw-bg-opacity));
}
.bg-\[\#f5f5f5\] {
    --tw-bg-opacity: 1;
    background-color: rgb(245 245 245 / var(--tw-bg-opacity));
}
.bg-\[\#fff\] {
    --tw-bg-opacity: 1;
    background-color: rgb(255 255 255 / var(--tw-bg-opacity));
}
.bg-black {
    --tw-bg-opacity: 1;
    background-color: rgb(0 0 0 / var(--tw-bg-opacity));
}
.bg-gray-50 {
    --tw-bg-opacity: 1;
    background-color: rgb(249 250 251 / var(--tw-bg-opacity));
}
.bg-gray-500 {
    --tw-bg-opacity: 1;
    background-color: rgb(107 114 128 / var(--tw-bg-opacity));
}
.bg-gray-600 {
    --tw-bg-opacity: 1;
    background-color: rgb(75 85 99 / var(--tw-bg-opacity));
}
.bg-white {
    --tw-bg-opacity: 1;
    background-color: rgb(255 255 255 / var(--tw-bg-opacity));
}
.p-0 {
    padding: 0;
}
.p-10 {
    padding: 2.5rem;
}
.p-2 {
    padding: 0.5rem;
}
.p-3 {
    padding: 0.75rem;
}
.p-4 {
    padding: 1rem;
}
.p-5 {
    padding: 1.25rem;
}
.p-6 {
    padding: 1.5rem;
}
.p-8 {
    padding: 2rem;
}
.px-20 {
    padding-left: 5rem;
    padding-right: 5rem;
}
.px-24 {
    padding-left: 6rem;
    padding-right: 6rem;
}
.px-3 {
    padding-left: 0.75rem;
    padding-right: 0.75rem;
}
.px-5 {
    padding-left: 1.25rem;
    padding-right: 1.25rem;
}
.py-10 {
    padding-top: 2.5rem;
    padding-bottom: 2.5rem;
}
.py-2 {
    padding-top: 0.5rem;
    padding-bottom: 0.5rem;
}
.py-20 {
    padding-top: 5rem;
    padding-bottom: 5rem;
}
.py-3 {
    padding-top: 0.75rem;
    padding-bottom: 0.75rem;
}
.py-4 {
    padding-top: 1rem;
    padding-bottom: 1rem;
}
.py-8 {
    padding-top: 2rem;
    padding-bottom: 2rem;
}
.pb-10 {
    padding-bottom: 2.5rem;
}
.pb-16 {
    padding-bottom: 4rem;
}
.pb-20 {
    padding-bottom: 5rem;
}
.pb-28 {
    padding-bottom: 7rem;
}
.pb-4 {
    padding-bottom: 1rem;
}
.pb-5 {
    padding-bottom: 1.25rem;
}
.pb-60 {
    padding-bottom: 15rem;
}
.pl-16 {
    padding-left: 4rem;
}
.pl-4 {
    padding-left: 1rem;
}
.pl-5 {
    padding-left: 1.25rem;
}
.pr-10 {
    padding-right: 2.5rem;
}
.pr-16 {
    padding-right: 4rem;
}
.pt-0 {
    padding-top: 0;
}
.pt-16 {
    padding-top: 4rem;
}
.pt-2 {
    padding-top: 0.5rem;
}
.pt-20 {
    padding-top: 5rem;
}
.pt-5 {
    padding-top: 1.25rem;
}
.text-center {
    text-align: center;
}
.text-right {
    text-align: right;
}
.align-baseline {
    vertical-align: baseline;
}
.font-\[Causten-Regular\] {
    font-family: Causten-Regular;
}
.font-\[Inter\] {
    font-family: Inter;
}
.text-2xl {
    font-size: 1.5rem;
    line-height: 2rem;
}
.text-3xl {
    font-size: 1.875rem;
    line-height: 2.25rem;
}
.text-4xl {
    font-size: 2.25rem;
    line-height: 2.5rem;
}
.text-\[10px\] {
    font-size: 10px;
}
.text-\[24px\] {
    font-size: 24px;
}
.text-base {
    font-size: 1rem;
    line-height: 1.5rem;
}
.text-lg {
    font-size: 1.125rem;
    line-height: 1.75rem;
}
.text-sm {
    font-size: 0.875rem;
    line-height: 1.25rem;
}
.text-xl {
    font-size: 1.25rem;
    line-height: 1.75rem;
}
.text-xs {
    font-size: 0.75rem;
    line-height: 1rem;
}
.font-bold {
    font-weight: 700;
}
.font-light {
    font-weight: 300;
}
.font-medium {
    font-weight: 500;
}
.font-normal {
    font-weight: 400;
}
.font-semibold {
    font-weight: 600;
}
.text-\[\#000\] {
    --tw-text-opacity: 1;
    color: rgb(0 0 0 / var(--tw-text-opacity));
}
.text-\[\#00847F\] {
    --tw-text-opacity: 1;
    color: rgb(0 132 127 / var(--tw-text-opacity));
}
.text-\[\#262626\] {
    --tw-text-opacity: 1;
    color: rgb(38 38 38 / var(--tw-text-opacity));
}
.text-\[\#4F4F4F\],
.text-\[\#4f4f4f\] {
    --tw-text-opacity: 1;
    color: rgb(79 79 79 / var(--tw-text-opacity));
}
.text-\[\#808080\] {
    --tw-text-opacity: 1;
    color: rgb(128 128 128 / var(--tw-text-opacity));
}
.text-\[\#98EAF2\] {
    --tw-text-opacity: 1;
    color: rgb(152 234 242 / var(--tw-text-opacity));
}
.text-\[\#9E9E9E\] {
    --tw-text-opacity: 1;
    color: rgb(158 158 158 / var(--tw-text-opacity));
}
.text-\[\#A0A09F\] {
    --tw-text-opacity: 1;
    color: rgb(160 160 159 / var(--tw-text-opacity));
}
.text-\[\#DB0011\] {
    --tw-text-opacity: 1;
    color: rgb(219 0 17 / var(--tw-text-opacity));
}
.text-\[\#fff\] {
    --tw-text-opacity: 1;
    color: rgb(255 255 255 / var(--tw-text-opacity));
}
.text-gray-300 {
    --tw-text-opacity: 1;
    color: rgb(209 213 219 / var(--tw-text-opacity));
}
.text-gray-700 {
    --tw-text-opacity: 1;
    color: rgb(55 65 81 / var(--tw-text-opacity));
}
.text-red-400 {
    --tw-text-opacity: 1;
    color: rgb(248 113 113 / var(--tw-text-opacity));
}
.text-red-600 {
    --tw-text-opacity: 1;
    color: rgb(220 38 38 / var(--tw-text-opacity));
}
.text-white {
    --tw-text-opacity: 1;
    color: rgb(255 255 255 / var(--tw-text-opacity));
}
.underline {
    text-decoration-line: underline;
}
.opacity-90 {
    opacity: 0.9;
}
.shadow-lg {
    --tw-shadow: 0 10px 15px -3px rgb(0 0 0 / 0.1),
        0 4px 6px -4px rgb(0 0 0 / 0.1);
    --tw-shadow-colored: 0 10px 15px -3px var(--tw-shadow-color),
        0 4px 6px -4px var(--tw-shadow-color);
    box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000),
        var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}
.outline-none {
    outline: 2px solid transparent;
    outline-offset: 2px;
}
.transition-opacity {
    transition-property: opacity;
    transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
    transition-duration: 0.15s;
}
.transition-transform {
    transition-property: transform;
    transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
    transition-duration: 0.15s;
}
.duration-300,
.duration-\[300ms\] {
    transition-duration: 0.3s;
}
.ease-in {
    transition-timing-function: cubic-bezier(0.4, 0, 1, 1);
}
.image-ai img {
    transition: opacity 0.5s ease;
    opacity: 1;
}
.hero:hover .image-ai img {
    opacity: 1;
}
@keyframes bounce {
    0%,
    to {
        transform: translateY(0);
    }
    50% {
        transform: translateY(-8px);
    }
}
.view-button img {
    transition: transform 0.1s ease-in-out;
}
.view-button:hover img {
    transform: scaleX(1.1);
}
.hover\:bg-gray-400:hover {
    --tw-bg-opacity: 1;
    background-color: rgb(156 163 175 / var(--tw-bg-opacity));
}
.hover\:bg-gray-800:hover {
    --tw-bg-opacity: 1;
    background-color: rgb(31 41 55 / var(--tw-bg-opacity));
}
.focus\:border-2:focus {
    border-width: 2px;
}
.focus\:border-gray-300:focus {
    --tw-border-opacity: 1;
    border-color: rgb(209 213 219 / var(--tw-border-opacity));
}
.focus\:border-gray-400:focus {
    --tw-border-opacity: 1;
    border-color: rgb(156 163 175 / var(--tw-border-opacity));
}
.focus\:outline-none:focus {
    outline: 2px solid transparent;
    outline-offset: 2px;
}
.group:hover .group-hover\:-translate-x-1 {
    --tw-translate-x: -0.25rem;
    transform: translate(var(--tw-translate-x), var(--tw-translate-y))
        rotate(var(--tw-rotate)) skew(var(--tw-skew-x)) skewY(var(--tw-skew-y))
        scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}
.group:hover .group-hover\:opacity-80 {
    opacity: 0.8;
}
@media (min-width: 768px) {
    .md\:left-48 {
        left: 12rem;
    }
    .md\:-mt-10 {
        margin-top: -2.5rem;
    }
    .md\:-mt-16 {
        margin-top: -4rem;
    }
    .md\:-mt-8 {
        margin-top: -2rem;
    }
    .md\:mb-12 {
        margin-bottom: 3rem;
    }
    .md\:ml-28 {
        margin-left: 7rem;
    }
    .md\:mt-0 {
        margin-top: 0;
    }
    .md\:mt-10 {
        margin-top: 2.5rem;
    }
    .md\:mt-12 {
        margin-top: 3rem;
    }
    .md\:mt-16 {
        margin-top: 4rem;
    }
    .md\:mt-20 {
        margin-top: 5rem;
    }
    .md\:block {
        display: block;
    }
    .md\:flex {
        display: flex;
    }
    .md\:hidden {
        display: none;
    }
    .md\:h-\[373\.54px\] {
        height: 373.54px;
    }
    .md\:h-\[586px\] {
        height: 586px;
    }
    .md\:h-\[730px\] {
        height: 730px;
    }
    .md\:h-full {
        height: 100%;
    }
    .md\:w-1\/2 {
        width: 50%;
    }
    .md\:w-1\/3 {
        width: 33.333333%;
    }
    .md\:w-1\/4 {
        width: 25%;
    }
    .md\:w-2\/3 {
        width: 66.666667%;
    }
    .md\:w-3\/4 {
        width: 75%;
    }
    .md\:w-80 {
        width: 20rem;
    }
    .md\:w-\[110\%\] {
        width: 110%;
    }
    .md\:w-\[342px\] {
        width: 342px;
    }
    .md\:w-\[375px\] {
        width: 375px;
    }
    .md\:w-\[40\%\] {
        width: 40%;
    }
    .md\:w-\[515px\] {
        width: 515px;
    }
    .md\:w-\[518px\] {
        width: 518px;
    }
    .md\:w-\[60\%\] {
        width: 60%;
    }
    .md\:w-\[600px\] {
        width: 600px;
    }
    .md\:w-\[785px\] {
        width: 785px;
    }
    .md\:w-full {
        width: 100%;
    }
    .md\:flex-row {
        flex-direction: row;
    }
    .md\:flex-col {
        flex-direction: column;
    }
    .md\:flex-nowrap {
        flex-wrap: nowrap;
    }
    .md\:items-start {
        align-items: flex-start;
    }
    .md\:items-end {
        align-items: flex-end;
    }
    .md\:justify-between {
        justify-content: space-between;
    }
    .md\:gap-1 {
        gap: 0.25rem;
    }
    .md\:gap-12 {
        gap: 3rem;
    }
    .md\:gap-16 {
        gap: 4rem;
    }
    .md\:gap-20 {
        gap: 5rem;
    }
    .md\:gap-24 {
        gap: 6rem;
    }
    .md\:gap-28 {
        gap: 7rem;
    }
    .md\:gap-48 {
        gap: 12rem;
    }
    .md\:rounded-\[80px\] {
        border-radius: 80px;
    }
    .md\:rounded-bl-3xl {
        border-bottom-left-radius: 1.5rem;
    }
    .md\:rounded-tr-3xl {
        border-top-right-radius: 1.5rem;
    }
    .md\:p-10 {
        padding: 2.5rem;
    }
    .md\:p-12 {
        padding: 3rem;
    }
    .md\:p-8 {
        padding: 2rem;
    }
    .md\:px-10 {
        padding-left: 2.5rem;
        padding-right: 2.5rem;
    }
    .md\:px-20 {
        padding-left: 5rem;
        padding-right: 5rem;
    }
    .md\:px-28 {
        padding-left: 7rem;
        padding-right: 7rem;
    }
    .md\:px-32 {
        padding-left: 8rem;
        padding-right: 8rem;
    }
    .md\:px-40 {
        padding-left: 10rem;
        padding-right: 10rem;
    }
    .md\:px-48 {
        padding-left: 12rem;
        padding-right: 12rem;
    }
    .md\:py-20 {
        padding-top: 5rem;
        padding-bottom: 5rem;
    }
    .md\:pb-10 {
        padding-bottom: 2.5rem;
    }
    .md\:pb-20 {
        padding-bottom: 5rem;
    }
    .md\:pb-60 {
        padding-bottom: 15rem;
    }
    .md\:pl-20 {
        padding-left: 5rem;
    }
    .md\:pl-48 {
        padding-left: 12rem;
    }
    .md\:pr-20 {
        padding-right: 5rem;
    }
    .md\:pt-20 {
        padding-top: 5rem;
    }
    .md\:pt-56 {
        padding-top: 14rem;
    }
    .md\:text-left {
        text-align: left;
    }
}
@media (min-width: 1536px) {
    .\32xl\:mt-48 {
        margin-top: 12rem;
    }
    .\32xl\:h-\[800px\] {
        height: 800px;
    }
    .\32xl\:h-\[900px\] {
        height: 900px;
    }
    .\32xl\:w-\[300px\] {
        width: 300px;
    }
    .\32xl\:w-\[40\%\] {
        width: 40%;
    }
    .\32xl\:w-\[56\%\] {
        width: 56%;
    }
}

    </style>

</head>

<body>
    <div id="app max-w-[1440px]">
        <main class="">
            {{-- @include('includes.navbar') --}}
            @yield('content')

        </main>
    </div>


    {{-- Toggle Mobile Navigation  --}}
    <script>
        const toggleButton = document.querySelectorAll('.menuButton');
        const menu = document.getElementById('menu');

        toggleButton.forEach(function(button) {
            button.addEventListener('click', function() {
                menu.classList.toggle('translate-x-[500px]');
            })
        });
    </script>
    {{-- Toggle Mobile Navigation --}}

    {{-- Scroll To Top --}}
    <script>
        function scrollToTop() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        }
    </script>
    {{-- Scroll To Top --}}

    {{-- Active Page --}}
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Get the current path
            const currentPath = window.location.pathname;

            // Select all links in the navigation
            const navLinks = document.querySelectorAll('ul a');

            // Loop through each link and add underline to the active one
            navLinks.forEach(link => {
                if (link.getAttribute('href') === currentPath) {
                    link.classList.add('underline'); // Add underline class if active
                }
            });
        });
    </script>

    {{-- Active Page --}}

    {{-- Animate on scroll --}}
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>


    {{-- Animate on scroll --}}
    @yield('script')

</body>

</html>
