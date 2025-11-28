/**
 * @file Footer.tsx
 * @description for displaying the footer of the website
 * @version 1.0.0
 * @date 27/11/2025
 * @author
 *  - Aswin Tk
 */

'use client';

import React from 'react';
import Image from 'next/image';
import { FaFacebookF, FaTwitter, FaLinkedinIn, FaPhoneAlt, FaEnvelope, FaMapMarkerAlt, FaInstagram } from 'react-icons/fa';

const Footer = () => {
  return (
    <footer className="bg-[#0f0a20] text-gray-300">
     
      <div className="relative bg-linear-to-br from-[#4e54c8] to-[#8f94fb] py-12 px-6 overflow-hidden">
      
        <div className="absolute inset-0 z-0">
          <Image
            src="/images/Footer/Foorerlayer.jpg"
            alt="Background Wave Pattern"
            layout="fill"
            objectFit="cover"
            className="opacity-20"
          />
        </div>

        <div className="relative max-w-7xl mx-auto flex flex-col lg:flex-row items-center justify-between text-white z-10">
          <div className="flex items-center text-center lg:text-left mb-8 lg:mb-0">
            <div className="bg-white bg-opacity-20 p-3 rounded-full mr-6 hidden md:flex items-center justify-center">
                <Image
                    src="/images/Footer/call.jpg"
                    alt="Call Icon"
                    width={65}
                    height={40}
                />
            </div>
            <div>
              <p className="text-xl md:text-2xl font-semibold mb-2">We’re Delivering the best</p>
              <h3 className="text-3xl md:text-4xl font-extrabold">customer Experience</h3>
            </div>
          </div>
          <a
            href="tel:+44920090"
            className="bg-white text-[#4e54c8] font-bold py-4 px-8 rounded-full text-lg shadow-lg hover:bg-gray-100 transition duration-300"
          >
             info@arameglobal.com
          </a>
        </div>
      </div>

      {/* Main Content */}
      <div className="max-w-7xl mx-auto px-6 py-16 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 border-b border-gray-700">
        
        <div>
          <h3 className="text-2xl font-bold text-white mb-6">AraMe Global</h3>
          <p className="text-gray-400 leading-relaxed mb-6">
            Clarity in Purpose, Precision in Code.
          </p>
          <div className="flex space-x-4">
            <a href="#" className="w-10 h-10 flex items-center justify-center rounded-full bg-blue-700 hover:bg-blue-500 transition duration-300">
              <FaFacebookF className="text-white text-lg" />
            </a>
            <a href="#" className="w-10 h-10 flex items-center justify-center rounded-full bg-blue-700 hover:bg-blue-500 transition duration-300">
              <FaTwitter className="text-white text-lg" />
            </a>
            <a href="#" className="w-10 h-10 flex items-center justify-center rounded-full bg-blue-700 hover:bg-blue-500 transition duration-300">
              <FaLinkedinIn className="text-white text-lg" />
            </a>
            <a  href="#" className="w-10 h-10 flex items-center justify-center rounded-full bg-blue-700 hover:bg-blue-500 transition duration-300">
            <FaInstagram className="text-white text-lg" />
            </a>
          </div>
        </div>

        <div>
          <h4 className="text-xl font-semibold text-white mb-6">Useful Links</h4>
          <ul className="space-y-3">
            <li><a href="#" className="text-gray-400 hover:text-white transition duration-300">Home</a></li>
            <li><a href="#" className="text-gray-400 hover:text-white transition duration-300">About us</a></li>
            <li><a href="#" className="text-gray-400 hover:text-white transition duration-300">Services</a></li>
            <li><a href="#" className="text-gray-400 hover:text-white transition duration-300">Portfolio</a></li>
            <li><a href="#" className="text-gray-400 hover:text-white transition duration-300">Team</a></li>
          </ul>
        </div>

        <div>
          <h4 className="text-xl font-semibold text-white mb-6">Industries</h4>
          <ul className="space-y-3">
            <li><a href="#" className="text-gray-400 hover:text-white transition duration-300">Healthcare</a></li>
            <li><a href="#" className="text-gray-400 hover:text-white transition duration-300">Finance</a></li>
            <li><a href="#" className="text-gray-400 hover:text-white transition duration-300">Retail</a></li>
            <li><a href="#" className="text-gray-400 hover:text-white transition duration-300">Education</a></li>
            <li><a href="#" className="text-gray-400 hover:text-white transition duration-300">Manufacturing</a></li>
          </ul>
        </div>

        <div>
          <h4 className="text-xl font-semibold text-white mb-6">Contact Information</h4>
          <ul className="space-y-4">
            <li className="flex items-center">
              <FaPhoneAlt className="text-[#8f94fb] mr-3" />
              <a href="tel:+91458654528" className="text-gray-400 hover:text-white transition duration-300">+919847847135</a>
            </li>
            <li className="flex items-center">
              <FaEnvelope className="text-[#8f94fb] mr-3" />
              <a href="mailto:info@example.com" className="text-gray-400 hover:text-white transition duration-300">info@arameglobal.com</a>
            </li>
            <li className="flex items-start">
              <FaMapMarkerAlt className="text-[#8f94fb] mr-3 mt-1 shrink-0" />
              <p className="text-gray-400">ArameGlobal, Wee Spaces, 1st Floor, Relcon Plaza, Pattom, Thiruvananthapuram, Kerala 695004 India</p>
            </li>
          </ul>
        </div>
      </div>

      <div className="max-w-7xl mx-auto px-6 py-8 text-center text-gray-500 text-sm">
        <p>© Copyrights 2025 AraMe Global All rights reserved.</p>
      </div>
    </footer>
  );
};

export default Footer;