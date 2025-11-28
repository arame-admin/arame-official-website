/**
 * @file Navbar.tsx
 * @description for display navbar
 * @version 1.0.0
 * @date 28/11/2025
 * @author
 *  - Aswin Tk
 */

/* eslint-disable @typescript-eslint/no-unused-expressions */
"use client";

import { FC, useState } from 'react';
import Image from 'next/image';
import Link from 'next/link';

interface DropdownItem {
  name: string;
  href: string;
  description: string;
  imageSrc: string;
}

interface NavItem {
  name: string;
  href: string;
  hasDropdown: boolean;
  dropdownContent?: DropdownItem[];
}

const industriesContent: DropdownItem[] = [
  {
    name: 'Healthcare',
    href: '/industries/healthcare',
    description: 'The adoption of digital technologies is transforming Medical Imaging, Patientcare, and Surgical Planning in ways never imagined before.',
    imageSrc: '/images/about/Mission_1.jpg', 
  },
  {
    name: 'Industrial',
    href: '/industries/industrial',
    description: 'Enabling smart factories and optimizing complex supply chains with IoT and advanced analytics.',
    imageSrc: '/images/about/vision_1.avif', 
  },
  {
    name: 'Retail',
    href: '/industries/retail',
    description: 'Creating seamless omnichannel experiences and leveraging AI for personalized customer journeys.',
    imageSrc: '/images/industries/retail_placeholder.jpg', 
  },
  {
    name: 'Consumer & Media',
    href: '/industries/consumer-media',
    description: 'Developing engaging digital platforms and utilizing data for targeted content delivery.',
    imageSrc: '/images/industries/consumer-media_placeholder.jpg', 
  },
];

const navLinks: NavItem[] = [
  { name: 'INDUSTRIES', href: '/industries', hasDropdown: true, dropdownContent: industriesContent },
  { name: 'SERVICES', href: '/services', hasDropdown: true, dropdownContent: industriesContent.slice(0, 2) },
  { name: 'INSIGHTS', href: '/insights', hasDropdown: true, dropdownContent: industriesContent.slice(0, 3) },
  { name: 'COMPANY', href: '/company', hasDropdown: true, dropdownContent: industriesContent.slice(0, 1) },
];

//2.Dropdown Component 

interface MegaDropdownProps {
  content: DropdownItem[];
  closeDropdown: () => void;
  title: string;
}

const MegaDropdown: FC<MegaDropdownProps> = ({ content, closeDropdown, title }) => {
  const [activeItem, setActiveItem] = useState<DropdownItem>(content[0]);

  if (!content || content.length === 0) return null;

  return (
    <div 
      onMouseLeave={closeDropdown}
      className="absolute top-20 w-full"
    >
      <div className="max-w-7xl mx-auto">
        <div className="absolute right-0 w-full lg:max-w-3xl xl:max-w-4xl shadow-xl pt-0 border-t border-blue-200 bg-[#1c7ed6]/50 rounded-bl-4xl overflow-hidden opacity-95">
          <div className="flex">
            
            {/* Left Navigation Bar (Blue Area - 1/3 Width) */}
            <div className="w-1/3 bg-[#1c7ed6]/50 p-6 space-y-2 text-white min-h-[300px]">
              <h2 className="text-xl font-bold mb-3 text-white">{title}</h2>
              <div className="space-y-1">
                {content.map((item) => (
                  <Link
                    key={item.name}
                    href={item.href}
                    onMouseEnter={() => setActiveItem(item)}
                    onClick={closeDropdown}
                    className={`
                      block py-2 px-3 text-base font-medium rounded-md transition duration-200
                      ${
                        activeItem.name === item.name
                          ? 'bg-white text-[#1c7ed6] shadow-md'
                          : 'hover:bg-[#3498db] text-white'
                      }
                    `}
                  >
                    {item.name}
                  </Link>
                ))}
              </div>
            </div>

            {/* Right Content Area (Image and Description - 2/3 Width) */}
            <div className="w-2/3 p-6 flex flex-col justify-start">
              <h3 className="text-2xl font-bold text-white mb-4">{activeItem.name}</h3>
              <p className="text-white text-base max-w-4xl mb-4">
                {activeItem.description}
              </p>
              <div className="relative w-full h-[250px] rounded-lg overflow-hidden shadow-xl">
                <Image
                  src={activeItem.imageSrc}
                  alt={`${activeItem.name} Image`}
                  layout="fill"
                  objectFit="cover"
                  priority
                />
                <div className="absolute inset-x-0 bottom-0 p-4 bg-linear-to-t from-black/70 to-transparent">
                    <h4 className="text-white text-xl font-semibold">{activeItem.name}</h4>
                    <p className="text-white text-xs mt-1">{activeItem.description}</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  );
};

// --- 3. Main Navbar Component ---
const Navbar: FC = () => {
  const [hoveredLink, setHoveredLink] = useState<string | null>(null);
  const [isNavHovered, setIsNavHovered] = useState(false); 
  const activeLink = navLinks.find(link => link.name === hoveredLink);
  const megaDropdownContent = activeLink?.dropdownContent;

  // Function to handle the navigation bar's background reset
  const handleNavMouseLeave = () => {
    // When the mouse leaves the entire nav area, force both states to reset
    setHoveredLink(null);
    setIsNavHovered(false);
  };
  
  // Determine if the background should be white (either the nav bar or the dropdown is active)
  const shouldShowWhiteBg = isNavHovered || !!hoveredLink;

  return (
    <nav className="relative  w-full "
         onMouseEnter={() => setIsNavHovered(true)} 
         onMouseLeave={handleNavMouseLeave}
    >
      
      <div className={`w-full h-20  flex items-center justify-between transition-all duration-300  ${shouldShowWhiteBg ? 'bg-white shadow-lg' : 'bg-transparent'}`}>
        
        {/* New Wrapper to constrain content to max-w-7xl and center it */}
        <div className="max-w-7xl mx-auto w-full flex items-center justify-between px-6">
        
            {/* Logo and Tagline */}
            <Link href="/" className="flex items-center">
              <Image
                src="/images/logos/logo.png"
                alt="AraMe Global Logo"
                width={150}
                height={30}
                priority
              />
              <span className={`text-2xl ml-2 font-bold transition-colors duration-300 ${shouldShowWhiteBg ? 'text-gray-800' : 'text-white'}`}>AraMe Global</span>
            </Link>

            {/* Navigation Links */}
            <div className="hidden lg:flex items-center space-x-6 font-medium h-full">
              {navLinks.map((link) => (
                <div
                  key={link.name}
                  className="relative flex items-center h-full"
                  onMouseEnter={() => {
                    link.hasDropdown && setHoveredLink(link.name);
                    setIsNavHovered(true);
                  }}
                >
                  <Link
                    href={link.href}
                    className={`transition duration-200 flex items-center uppercase text-sm py-2 font-semibold
                      ${
                        hoveredLink === link.name
                        ? 'text-[#1c7ed6]'
                        : shouldShowWhiteBg
                          ? 'text-gray-800 hover:text-[#1c7ed6]'
                          : 'text-white hover:text-[#1c7ed6]'
                      }
                    `}
                  >
                    {link.name}

                    {/* Dropdown Arrow */}
                    {link.hasDropdown && (
                      <svg
                        className={`w-3 h-3 ml-1 transition-colors duration-300
                          ${shouldShowWhiteBg ? 'text-gray-500' : 'text-white'}`}
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          strokeLinecap="round"
                          strokeLinejoin="round"
                          strokeWidth="2"
                          d="M19 9l-7 7-7-7"
                        ></path>
                      </svg>
                    )}
                  </Link>
                </div>
              ))}
              
              {/* Contact Link */}
              <Link 
                href="/ja"
                className={`text-sm py-2 font-semibold transition duration-300
                  ${
                    shouldShowWhiteBg
                      ? 'text-gray-600 hover:text-[#1c7ed6]'
                      : 'text-white hover:text-[#1c7ed6]'
                  }
                `}
              >
                CONTACT
              </Link>
              
            </div>
            
            {/* Contact Button */}
            <div className="flex items-center">
                <Link
                  href="/contact"
                  className="bg-[#1c7ed6] text-white font-medium text-sm py-2 px-6 ml-8 rounded-md hover:bg-[#145a99] transition duration-200 border border-[#1c7ed6]"
                >
                    CONTACT
                </Link>
            </div>
        </div>
      </div>

      {/* --- RENDER MEGA DROPDOWN --- */}
      {hoveredLink && megaDropdownContent && (
          <MegaDropdown 
              content={megaDropdownContent}
              closeDropdown={() => setHoveredLink(null)}
              title={hoveredLink}
          />
      )}
    </nav>
  );
};

export default Navbar;