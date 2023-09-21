<?php

namespace Database\Seeders;

use App\Models\Bismillah;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BismillahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bismillah = new Bismillah();
        $bismillah->name = 'bismillah-1';
        $bismillah->svg = '<svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 445.31 225.34"><defs><style>.cls-1{isolation:isolate;}</style></defs><path d="M306.43,88.53c-4.7.29-9.41.5-14.1.91-1.63.15-2.63.08-3.49-1.65-3.22-6.42-6.41-12.87-10-19.08-8.81-15.22-16.7-30.87-21.2-48-1.21-4.61-2-9.32-3.08-14.19a9.22,9.22,0,0,0-1.63,3.38c-3.69,11-2.18,21.89.82,32.62,3.3,11.84,8.79,22.77,15,33.33L276,88.21c.77,1.3.83,2.06-1.07,1.94a22,22,0,0,0-5,0c-2.67.46-3.9-.9-5-3-2.94-5.6-6-11.15-9-16.69-6.26-11.33-11.22-23.08-13.1-36-.54-3.58-.2-7.22-1-10.73-.74,0-.82.49-1.06.83-5.34,7.87-5.73,16.62-4.27,25.59s5,17.29,9.21,25.29c1.84,3.49,3.81,6.88,6,10.88-1.38-.51-2.2-.72-2.94-1.09A170.85,170.85,0,0,1,227.27,72.1c-7.67-5.39-15.36-10.72-23.83-14.86-9.3-4.55-19-6.53-29.3-4.92-10.94,1.74-19.1,7.45-24.83,16.74-1,1.55-2.27,3.14-2.15,5.7A67.66,67.66,0,0,1,156,67.65c6.45-4.19,13.46-6.43,21.18-5.58s14.6,3.85,21.17,7.6c10.43,5.94,20.61,12.18,30.85,18.29,4,2.33,7.83,4.68,12,7.19a30,30,0,0,1-5.89.74c-8.14.26-16.19-.72-24.27-1.51-1.08-.1-1.42-.6-1.8-1.49a26,26,0,0,0-11.4-12.52,1.49,1.49,0,0,0-.29-.2,1.87,1.87,0,0,0-2.55.68,44.18,44.18,0,0,0-4.35,6.73c-2.82,5-4.88,10.38-8.3,15-3.95,5.4-8.71,5.63-13.33,1-2.68-2.75-5.56-5.19-8.32-7.75-.81,3.52-1.68,7.38-2.61,11.22a3.21,3.21,0,0,0,.63,2.43c5.12,9.35,9.35,19,10.12,29.83.62,8.67-1.66,16.43-8.06,24.09l-10-10.86a39.69,39.69,0,0,0,7.14,11c1.18,1.36,1,2-.08,3.11-5.3,5.46-11.72,9.12-18.72,12-1.07.4-1.82-.15-2.67-.6-8-4.22-14.47-10.26-20.47-16.82a11.17,11.17,0,0,0-3.7-3.13A62.11,62.11,0,0,0,127,180.77a19.64,19.64,0,0,1-2.87,0,61.76,61.76,0,0,1-20.3-7c-1.26-.73-1.92-1-2.74.67a94.29,94.29,0,0,1-4.92,8.27c-.72,1.12-.37,1.59.63,2.22a67.58,67.58,0,0,0,20.16,8.82c11.23,2.66,21.49.34,31-5.9a64,64,0,0,0,15.39-14.74c.41-.52.68-1.9,1.91-.79,2.28,2.08,4.59,4.13,6.89,6.2-3.43,2.56-6.79,3.28-10,4.28-1.23.39-2.88-.06-3.74.94a53.14,53.14,0,0,1-11.61,9.52,24.15,24.15,0,0,0,22,1,39,39,0,0,0,10.18-6.72,2.37,2.37,0,0,1,3.19-.37,60.68,60.68,0,0,0,15.61,6.89c11.1,3.18,21.67,2.2,31.39-4.42,11.66-7.94,17.87-19.53,21.76-32.68,1.48-5,2-10.23,2.74-15.57a40.43,40.43,0,0,0,10.85,6.1c1.77.62,3.05.4,4.24-1.52,6.62-10.7,9.6-22,6.77-34.57-1-4.5-1.15-4.7-5.72-4.11-.69.12-1.4,0-2.09.12-3.25.38-3.23.39-2.59,3.62.35,1.8.6,3.61.95,5.41a63.8,63.8,0,0,1,1.11,17c-10.79-5-18.47-13.38-26.29-22.11-.82,4.83-1.59,9.24-2.28,13.67a2.25,2.25,0,0,0,.45,1.44c3.13,4.5,6.18,9.08,10.55,12.5a1.77,1.77,0,0,1,.79,2c-.92,4.9-1.82,9.79-2.82,15.06-2.23-2-4.26-3.72-6.17-5.56-5.52-5.3-10.87-10.69-14.23-17.79a26.54,26.54,0,0,0-8.9-10.44c-1.07-.75-1.54-.65-2.19.46-1.42,2.4-2.93,4.73-4.42,7.07-6.87,10.75-13.23,21.84-21.23,31.84a118,118,0,0,1-9.8,10.81c2.32,1.36,4.32,2.52,6.32,3.73,1.17.73,2.07.84,3-.55a164.65,164.65,0,0,0,9-14.59c2.61-4.95,5.14-9.94,7.83-15.15.27,1.76.46,3.23.74,4.68,1.55,8,4.66,15.24,10.55,21.06,3.26,3.22,5.43,2.75,7.43-1.46.11-.23.15-.5.27-.73,2.11-3.93,2.44-8.4,4-13.46,3.42,3.64,6.36,6.9,9.44,10,.75.83.68,1.14,0,1.83a67.7,67.7,0,0,1-7.11,6.54c-9.67,7.41-20.6,10.35-32.6,8.48-10.57-1.66-20-6.46-28.57-12.93-3.14-2.39-3.1-2.45-1.55-5.88.46-1,.94-2.08,1.4-3.08,3.57-8,6.11-16.23,6.2-25.07a64.88,64.88,0,0,0-2.31-17.2c-.36-1.41-.82-2.4,1.39-2a6.18,6.18,0,0,0,5.65-2.07c1.8-1.78,2.83-4.11,4.68-6.26.32,2.94,1.47,5.35,2.39,7.81,1.92,5.14,4.31,10.07,8.59,13.78,3.69,3.21,5.22,3,7.93-.91,4-5.77,5.51-12.3,5.7-19.18.05-1.69.45-2.2,2.05-2,1.82.24,3.66.29,5.49.4,15.92,1,31.29-3,46.86-5.19,12.91-1.8,25.82-2.8,38.54,1.26,1.27.38,1.54.22,1.74-1Q306.69,96.62,308,90C308.32,88.43,307.43,88.46,306.43,88.53Zm-82,72.43c-7.63-2.25-13.23-17-10.7-28.21C221,137.32,228.84,149.11,224.39,161Zm-20.33-43.74c-7.79-2.89-13.38-16.78-10.64-26.77C201.18,96.15,204.81,106.54,204.06,117.22Z" transform="translate(-5.61)"/><path d="M171.09,79.61c-6.26.45-12.54.8-18.81,1.18-2.08.12-4.37,1.26-6.17.27s-1.74-3.63-2.53-5.52c-3.9-9.33-8.9-18.16-12.62-27.56a73.65,73.65,0,0,1-4.9-19.31,130.59,130.59,0,0,1-.29-24.85.68.68,0,0,0-.53-.76,54.51,54.51,0,0,0-7,18.59c-2.26,15.69,1.08,30.54,7,45,2.11,5.12,4.51,10.08,7.11,15.2-2.06,0-3.9-.13-5.72,0A4,4,0,0,1,122.75,80a66.88,66.88,0,0,1-10.42-20.89c-3.29-10.74-4.27-21.81-4.2-33V23.2c-11.37,20.08-8.33,39.46,3,58.62-1.12-.12-1.72-.16-2.32-.25C98.38,80,89.7,74.91,82.15,67.85,75.27,61.43,67.88,56.09,58.45,54c-9.08-2-18-2-26.34,2.58-7,3.84-12,9.73-15.92,16.54C11.26,81.59,8.68,91,7,100.59a74.78,74.78,0,0,0-1.39,14.85,46.65,46.65,0,0,0,1.82-5C11.29,98.25,15.75,86.35,24,76.27c10.29-12.69,23.38-14.69,37.29-6.69,7.42,4.27,14.1,9.55,21.09,14.41,4,2.78,8.11,5.33,12.74,8.42-6.74.27-12.74.68-18.74.68a79.26,79.26,0,0,1-11.72-.93C58,91.19,53,87.88,50.35,81.45a44.84,44.84,0,0,1-3-11.78C47.14,68,47,67.38,45,68.17c-9.18,3.68-14.6,10.88-18.53,19.49-2.17,4.81-3.6,10-6.39,14.48a29.26,29.26,0,0,0-4,8.38,80.87,80.87,0,0,0-2.22,25.42c1.24,16.81,9.62,28.91,25.7,34.08,17.15,5.55,33.54,3.26,48.07-8a48.53,48.53,0,0,0,15.86-21c.24-.57-.06-.71-.56-.58h0a98.91,98.91,0,0,1-12.57,13.15c-1.64,1.4-2.22,1-3.13-.6-2.62-4.71-3.5-9.79-3.68-15-.3-8.12,1.64-16,3.69-23.73,0,0,0,0,0,0,.2-.58-.07-.69-.56-.58a53.42,53.42,0,0,0-10.12,24.19,45.94,45.94,0,0,0,2,19.89c.53,1.71-.1,2.18-1.47,2.43-3.23.58-6.38,1.62-9.68,1.93-12.9,1.22-25.22,0-36-8-5.48-4.06-9.91-8.91-12-15.64-2.42-7.81-2.29-15.81-1.78-23.81.13-2,.25-4.21,1.52-6,.5-.7,1.14-1.51,2.08-1.22s.43,1.19.51,1.81c.4,2.93.51,5.92,1.12,8.8,2.26,10.59,7.74,18.8,17.74,23.66,1.2.58,1.66.7,2.08-.85a98,98,0,0,0,3.86-20.66A27.49,27.49,0,0,0,43.91,106C40.62,99.56,34.84,96.76,28,95.7a26.48,26.48,0,0,1,8.07-11.41c3.9-3.36,3.87-3.24,5.12,1.56,2,7.7,5.68,14.5,12.78,18.89,6.68,4.06,14.06,4.41,21.51,3.41,10.51-1.32,20.31-5.09,30-9.32,3-1.33,5.76-3.37,9.07-3.84,8.37-1.2,16.81-1.79,25.25-2.2a162.76,162.76,0,0,1,28,1.1c1.39.18,1.71-.18,2-1.41.89-3.79,1.89-7.56,2.89-11.32C173.09,79.61,172.44,79.51,171.09,79.61ZM28.37,106.78c7.2,1.68,10.45,6.88,12.15,13.47a18.59,18.59,0,0,1,.57,6.6c-7.36-3.75-11.51-9.72-13.67-17.28-.14-.49-.31-1-.44-1.48C26.67,106.84,27,106.46,28.37,106.78Z" transform="translate(-5.61)"/><path d="M314.89,169.06c-14.37-11.29-19.77-28.94-13.85-45.72,3.85-10.91,11.51-18.37,22.18-22.8,1.8-.75,2.72-.85,2.65,1.71-.21,8.12-.1,16.25-.28,24.37a7.54,7.54,0,0,0,1.88,5.67,57.22,57.22,0,0,0,11.59,10.09c2.17,1.39,3.18,1,3.6-1.59a144.73,144.73,0,0,0,1.6-21.61c0-1.78-1.57-3-2.46-4.48-7.17-11.63-13.57-23.61-17.21-36.87-2.37-8.66-3.47-17.41-.83-26.24a26.86,26.86,0,0,1,4.51-9.2,114.16,114.16,0,0,0,1.07,12.66,101.72,101.72,0,0,0,7.41,26.37c3.94,9.46,9.88,17.85,14.32,27.05,3.41,7.06,6.52,14.25,9.83,22,0-5.24.27-9.9-.06-14.51A86.63,86.63,0,0,0,357,94.49a84.89,84.89,0,0,0-7.24-14.88c-6.39-11.22-11.53-22.93-13.2-35.83a32.12,32.12,0,0,1,3.54-20.21,13.75,13.75,0,0,1,1-1.28c.53,3.65.88,7,1.51,10.24,3,16.06,9.33,30.86,17.36,45,7.15,12.6,9.82,26.27,8.9,40.68-.63,9.65-2.75,18.86-8.28,27a30.51,30.51,0,0,1-3.48,3.88c-.91.94-1.45.68-1.82-.45-1.67-5.17-3.35-10.33-5.11-15.75-2,5.49-3.69,10.93-6.08,16.09a87.88,87.88,0,0,1-5.54,10c-1.47,2.32-2.48,1.61-3.86.24a51.39,51.39,0,0,1-14.11-23.92C318.84,128.57,319,121.78,319,115c-11.27,3.72-17.84,13-14.56,26.24,1.64,6.64,5.33,12.21,9.82,17.26a67.29,67.29,0,0,0,13.94,11.74c.74.48,1.48.75,1.34,1.92-1.07,8.71-2.08,17.43-3.62,26.18-.69-2.34-1.41-4.68-2.05-7s-1.22-4.88-1.87-7.31c-.91-3.4-.92-3.38-4.39-2.66-16.53,3.45-33,3.63-49.4-.79a79.86,79.86,0,0,1-16.31-6.67,1.86,1.86,0,0,1-1.14-2.37,2.09,2.09,0,0,1,.14-.3c1-2.85,2-5.71,2.88-8.6.39-1.26,1-1,1.87-.64a107.19,107.19,0,0,0,20.48,6.49C289.16,171.12,301.9,171.92,314.89,169.06Z" transform="translate(-5.61)"/><path d="M436.86,155c-1.28-3.56-1.61-4-5.52-7.28a51.37,51.37,0,0,1-5.23,20,43.06,43.06,0,0,1-12.89,16.37l-6-16.73c-1.08,2.12-2,3.81-2.82,5.53-2.23,4.59-4.48,9.17-6.62,13.81-.58,1.27-1.06,1.41-2.31.8-7.61-3.71-11.38-10.09-13-18.09-1.36-6.9-1-13.88-1.11-21.3-13.65,13.26-29.93,21.45-47.1,28.25a41.38,41.38,0,0,0-.07-6.2c-.34-2.16-3-2.41-4.08-4.34,1.11-.84,2.59-.87,3.91-1.33a190.28,190.28,0,0,0,37.68-17.44c3.39-2.08,6.61-4.45,10-6.5,2.25-1.35,4.92-.86,7.41-.85,1.13,0,.57,1.32.44,1.94a47.64,47.64,0,0,0-.85,13.53,25.16,25.16,0,0,0,6.86,16.18c1.26,1.3,1.91,1.58,2.63-.37.56-1.53,1.55-2.92,2.06-4.46.92-2.77,3.8-5,3-8.11-.71-2.89-2.43-5.52-3.41-8.41-2.38-6.95-3.28-14-1.67-21.23a26.45,26.45,0,0,1,3.35-7.38c.23.27.53.47.51.64-.78,9.88,2.4,18.85,6.55,27.52,3.49,7.27,6.86,14.54,8.21,22.69,2.1-2.39,3.65-6.49,4.9-12.66A76.14,76.14,0,0,0,423,144a3.13,3.13,0,0,0-1.63-2.88c-6.08-4.35-8.79-10.86-10.45-17.78a31,31,0,0,1-.15-15.76c.92-3.32,2.45-6.18,5.63-8.19,0,3.89.09,7.52,0,11.15-.24,8.46,2.87,15.25,9.91,20.09,3.57,2.45,7.19,4.83,11,7.38.65-4.74-.21-9.12-1-13.52-1.19-6.51-3.68-12.62-5.71-18.87-3.33-10.24-3.73-20.47.88-30.51a20.22,20.22,0,0,1,1.59-2.69c.27-.41.43-1,1.32-1.06-.06,4.4.1,8.77.35,13.14a68.12,68.12,0,0,0,5.43,22.6,53.08,53.08,0,0,1,3.73,29.29,44.89,44.89,0,0,1-6.48,18.16C437.35,154.68,437.18,154.76,436.86,155Z" transform="translate(-5.61)"/><path d="M9.63,161.39C15.87,169.54,24.51,174,34,177.05a83.85,83.85,0,0,0,35.58,3.8,41,41,0,0,0,15.83-4.78c1.35-.77,1.64-1.48.63-2.82s-2.74-3.11-2.66-4.61,2.48-2.45,3.82-3.69c4.26-4,4.39-4,7.8.66,1.34,1.84,1.9,1.52,3.08-.06a51.47,51.47,0,0,0,9.7-24.89c.1-.78.19-1.56.35-2.33a5,5,0,0,0-1.58-5.14c-3.32-3.1-5.87-6.88-8.71-10.41a2.59,2.59,0,0,1-.48-2.45c1.23-4.63,2.49-9.25,3.9-14.48,5.59,12,15.26,19.19,25.84,25.89.45-10.61-.25-20.68-4.5-30.2-.9-2-1.12-3.11,1.75-3.06a40.26,40.26,0,0,0,7-.89c1.38-.23,1.75.37,2.07,1.61a45.83,45.83,0,0,1,1.35,13.65c-.47,10.85-3.87,20.9-8.51,30.63-.82,1.72-1.52,1.63-2.93,1.08-4.39-1.73-8.14-4.49-12.13-7.5-.51,2.56-1,4.89-1.44,7.23-2.22,11.65-6,22.66-13.72,31.9-9.35,11.18-21.43,16.49-36,16.16C43.33,192,28.84,186.23,17,174.41a31.34,31.34,0,0,1-8-12.35C8.75,161.43,9.07,161.28,9.63,161.39Z" transform="translate(-5.61)"/><path d="M356,0c.67,6.47,1.68,12.82,2.7,19.16A113.59,113.59,0,0,0,372.1,57.51a143.28,143.28,0,0,1,12.79,29.41,59.65,59.65,0,0,1-.77,37.4c-1.2,3.48-2.34,7-3.66,10.94a4.72,4.72,0,0,1-.54-3.1c.14-11.27-.27-22.48-2.6-33.56a91.53,91.53,0,0,0-9-24.32c-4.27-8-9.15-15.69-12.44-24.21-4-10.36-7-20.91-6.43-32.13C349.82,11.4,351.5,5.21,356,0Z" transform="translate(-5.61)"/><path d="M143.85,144.68c.67-20.29.24-32.21-3.47-47.51,2.88-.79,5.88-.54,8.8-1,1.15-.17,1.53.32,1.77,1.33,2.86,11.74,3.83,23.46-.25,35.15A35.9,35.9,0,0,1,143.85,144.68Z" transform="translate(-5.61)"/><path d="M60.75,112.94c-.06,3.84,2.45,4.92,4.28,6.52,1.25,1.09,1.93,2,.2,3.33-2.35,1.87-4.52,4-6.58,5.8.57-3.11-2.19-4.43-4.56-5.88-1.47-.89-1.49-1.49-.31-2.63C55.93,118,58,115.77,60.75,112.94Z" transform="translate(-5.61)"/><path d="M58.21,144.05c.66-3.84-4-4.38-6.13-7.16l7.9-7.68c.33,3.16,2.69,4.57,4.75,6.13,1.25,1,1.6,1.65.3,2.76C62.62,140.17,60.24,142.27,58.21,144.05Z" transform="translate(-5.61)"/><path d="M127.56,161.51c.62-4.11-2.28-5.29-4.42-6.85-1.52-1.1-1.54-1.73-.23-2.93,2.12-1.92,4.1-4,6.44-6.3.42,3.38,3.18,4.62,5.2,6.51.62.58,1.22.94.35,1.83C132.56,156.17,130.28,158.63,127.56,161.51Z" transform="translate(-5.61)"/><path d="M445.18,159.63c.17,3.92,3,5,4.88,6.78,1,.92,1.21,1.39.17,2.41-2.27,2.23-4.41,4.6-7,7.32.59-4-2.1-5.25-4.26-6.68-1.85-1.23-1.6-2-.19-3.27C440.82,164.29,442.68,162.22,445.18,159.63Z" transform="translate(-5.61)"/><path d="M103.51,141l-.58-.6,1.18-2c.94,0,.65.5.44,1Z" transform="translate(-5.61)"/><path d="M9.63,161.39l-.64.68c-.12-.12-.35-.24-.33-.34.08-.68-1.35-1.41-.23-1.87C9.2,159.55,9.51,160.63,9.63,161.39Z" transform="translate(-5.61)"/><path d="M87.25,114.27l-.56-.58c0-.56.31-1.19.82-.87S87.89,113.85,87.25,114.27Z" transform="translate(-5.61)"/><path d="M104.55,139.41l-.44-1c0-.51.49-.94.72-.72C105.39,138.27,105.09,138.91,104.55,139.41Z" transform="translate(-5.61)"/><path d="M228.54,206.64c.49,1.68.82,2.81,1.19,4-1.1,0-2.51.64-2.86-.35S227.51,208.06,228.54,206.64Z" transform="translate(-5.61)"/><g class="cls-1"><rect x="7.38" y="210.45" width="3.59" height="14.74"/><polygon points="37.26 225.19 33.67 225.19 27.66 216.1 27.66 225.19 24.07 225.19 24.07 210.45 27.66 210.45 33.67 219.58 33.67 210.45 37.26 210.45 37.26 225.19"/><polygon points="75.92 210.45 75.92 213.32 72.02 213.32 72.02 225.19 68.42 225.19 68.42 213.32 64.52 213.32 64.52 210.45 75.92 210.45"/><polygon points="100.99 210.45 100.99 225.19 97.4 225.19 97.4 219.12 91.82 219.12 91.82 225.19 88.23 225.19 88.23 210.45 91.82 210.45 91.82 216.22 97.4 216.22 97.4 210.45 100.99 210.45"/><polygon points="117.67 213.32 117.67 216.31 122.48 216.31 122.48 219.08 117.67 219.08 117.67 222.31 123.11 222.31 123.11 225.19 114.08 225.19 114.08 210.45 123.11 210.45 123.11 213.32 117.67 213.32"/><polygon points="164.08 225.19 160.49 225.19 154.48 216.1 154.48 225.19 150.89 225.19 150.89 210.45 154.48 210.45 160.49 219.58 160.49 210.45 164.08 210.45 164.08 225.19"/><path d="M191.32,210.45h-4.16l-5.34,14.74h3.76l.89-2.6H192l.88,2.6h3.8Zm-3.91,9.36,1.81-5.39,1.82,5.39Z" transform="translate(-5.61)"/><polygon points="219.85 210.45 219.85 225.19 216.26 225.19 216.26 216.35 212.97 225.19 210.07 225.19 206.75 216.33 206.75 225.19 203.16 225.19 203.16 210.45 207.4 210.45 211.54 220.65 215.63 210.45 219.85 210.45"/><polygon points="236.53 213.32 236.53 216.31 241.34 216.31 241.34 219.08 236.53 219.08 236.53 222.31 241.97 222.31 241.97 225.19 232.94 225.19 232.94 210.45 241.97 210.45 241.97 213.32 236.53 213.32"/><path d="M288.87,213.89a7.13,7.13,0,0,0-2.73-2.69,8,8,0,0,0-7.62,0,7.32,7.32,0,0,0-2.75,2.69,7.93,7.93,0,0,0,0,7.78,7.13,7.13,0,0,0,2.75,2.7,7.95,7.95,0,0,0,7.61,0,7.08,7.08,0,0,0,2.73-2.7,8,8,0,0,0,0-7.78Zm-3.72,7a3.6,3.6,0,0,1-2.82,1.17,3.69,3.69,0,0,1-2.85-1.16,5.14,5.14,0,0,1,0-6.25,3.69,3.69,0,0,1,2.85-1.16,3.6,3.6,0,0,1,2.82,1.17,5.11,5.11,0,0,1,0,6.23Z" transform="translate(-5.61)"/><polygon points="306.35 210.45 306.35 213.32 300.35 213.32 300.35 216.43 304.84 216.43 304.84 219.23 300.35 219.23 300.35 225.19 296.75 225.19 296.75 210.45 306.35 210.45"/><path d="M347.83,210.45h-4.16l-5.33,14.74h3.76l.88-2.6h5.5l.88,2.6h3.8Zm-3.91,9.36,1.81-5.39,1.83,5.39Z" transform="translate(-5.61)"/><polygon points="363.26 222.42 367.97 222.42 367.97 225.19 359.67 225.19 359.67 210.45 363.26 210.45 363.26 222.42"/><polygon points="383.78 222.42 388.48 222.42 388.48 225.19 380.19 225.19 380.19 210.45 383.78 210.45 383.78 222.42"/><path d="M414.84,210.45h-4.16l-5.33,14.74h3.76l.88-2.6h5.5l.88,2.6h3.8Zm-3.91,9.36,1.81-5.39,1.83,5.39Z" transform="translate(-5.61)"/><polygon points="439.45 210.45 439.45 225.19 435.86 225.19 435.86 219.12 430.27 219.12 430.27 225.19 426.68 225.19 426.68 210.45 430.27 210.45 430.27 216.22 435.86 216.22 435.86 210.45 439.45 210.45"/></g></svg>';
        $bismillah->save();
    }
}
