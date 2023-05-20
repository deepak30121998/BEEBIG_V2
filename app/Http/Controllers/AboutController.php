<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOTools;

class AboutController extends Controller
{
    public function index()
    {
        SEOTools::setTitle('BeeBig Digital and its role in Digital Marketing Agency for Business Success.');
        SEOTools::setDescription('Transform your online presence with BeeBig Digital, a digital marketing agency that offers SEO, PPC, social media, content marketing, email marketing, and web design services. ');
        return view('Frontend.Front.about-us');
    }
}
