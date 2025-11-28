/**
 * @file AboutSection.tsx
 * @description for displaying the mission vision & values
 * @version 1.0.0
 * @date 27/11/2025
 * @author
 *  - Aswin Tk
 */

'use client';

import React, { useState, useEffect } from 'react';
import Image from 'next/image';
import { motion, AnimatePresence, Variants } from 'framer-motion';
import { AboutContentSlide } from './AboutSection.model';

export const ABOUT_SECTION_DATA: AboutContentSlide[] = [
  {
    subHeading: 'OUR CORE VALUES',
    title: 'Highly Tailored IT Design, Management & Support Services.',
    description:
      "Accelerate innovation with world-class tech teams. We'll match you to an entire remote team of incredible freelance talent for all your software development needs.",
    contactNumber: 'info@arameglobal.com',
    mainImage: '/images/about/value_2.webp',
    secondaryImage: '/images/about/value_1.webp',
  },
  {
    subHeading: 'OUR VISION',
    title: 'Innovating for a Connected and Secure Digital Future.',
    description:
      'Our vision is to empower businesses with cutting-edge technology solutions, fostering growth, security, and seamless digital transformation across all industries.',
    contactNumber: 'info@arameglobal.com',
    mainImage: '/images/about/vision_1.avif',
    secondaryImage: '/images/about/vision_2.jpg',
  },
  {
    subHeading: 'OUR MISSION',
    title: 'Delivering Excellence Through Collaborative Tech Solutions.',
    description:
      'We are committed to delivering exceptional IT services through collaborative partnerships, leveraging expert talent to solve complex challenges and drive tangible results.',
    contactNumber: 'info@arameglobal.com',
    mainImage: '/images/about/Mission_1.jpg',
    secondaryImage: '/images/about/Mission_2.jpg',
  },
];

const sectionVariants: Variants = {
  hidden: { opacity: 0, y: 50 },
  visible: {
    opacity: 1,
    y: 0,
    transition: { duration: 0.8, ease: 'easeOut', staggerChildren: 0.2 },
  },
};

const textVariants: Variants = {
  enter: { opacity: 0, y: 20 },
  center: { opacity: 1, y: 0 },
  exit: { opacity: 0, y: -20 },
};

const imageVariants: Variants = {
  enter: { opacity: 0, scale: 0.95 },
  center: { opacity: 1, scale: 1 },
  exit: { opacity: 0, scale: 0.95 },
};

//COMPONENT 
const AboutSection: React.FC = () => {
  const [currentSlideIndex, setCurrentSlideIndex] = useState<number>(0);
  const currentSlide = ABOUT_SECTION_DATA[currentSlideIndex];

  // Auto slide 
  
  useEffect(() => {
    const timer = setInterval(() => {
      setCurrentSlideIndex((prevIndex) =>
        (prevIndex + 1) % ABOUT_SECTION_DATA.length
      );
    }, 3500);
    return () => clearInterval(timer);
  }, []);

  return (
    <section className="bg-white py-20 lg:py-25">
      <motion.div
        className="max-w-7xl mx-auto px-6 grid grid-cols-1 lg:grid-cols-2 gap-12 items-center"
        initial="hidden"
        whileInView="visible"
        viewport={{ once: true, amount: 0.3 }}
        variants={sectionVariants}
      >
        {/* LEFT */}
        <div className="relative z-10">
          <AnimatePresence mode="wait">
            <motion.div
              key={currentSlideIndex}
              variants={textVariants}
              initial="enter"
              animate="center"
              exit="exit"
              transition={{ duration: 0.55, ease: 'easeOut' }}
            >
              <p className="uppercase text-sm font-medium tracking-widest text-[#1c7ed6] mb-3">
                {currentSlide.subHeading}
              </p>

              <h2 className="text-4xl lg:text-5xl font-extrabold leading-tight text-gray-800 mb-6">
                {currentSlide.title}
              </h2>

              <p
                className="text-lg text-gray-600 mb-8 overflow-y-auto pr-2"
                style={{ maxHeight: '10rem' }}
              >
                {currentSlide.description}
              </p>

              <div className="mt-10">
                <p className="text-gray-500 mb-1">Connect to ask any question:</p>
                <p className="text-xl font-bold text-[#1c7ed6]">
                  {currentSlide.contactNumber}
                </p>
              </div>

              {/* Slide  */}
              <div className="mt-8 flex space-x-2">
                {ABOUT_SECTION_DATA.map((_, index) => (
                  <button
                    key={index}
                    onClick={() => setCurrentSlideIndex(index)}
                    className={`w-3 h-3 rounded-full transition-colors duration-300 ${
                      index === currentSlideIndex
                        ? 'bg-[#1c7ed6]'
                        : 'bg-gray-300 hover:bg-gray-400'
                    }`}
                  />
                ))}
              </div>
            </motion.div>
          </AnimatePresence>
        </div>

        {/* RIGHT  */}
        <div className="relative flex items-center justify-center h-[450px] lg:h-[600px] mt-12 lg:mt-0">
          <AnimatePresence mode="wait">
            {/* Main Image */}
            <motion.div
              key={`main-${currentSlideIndex}`}
              variants={imageVariants}
              initial="enter"
              animate="center"
              exit="exit"
              transition={{ duration: 0.55 }}
              className="absolute w-full h-full lg:w-[85%] lg:h-[85%] rounded-lg overflow-hidden shadow-2xl"
              style={{ top: '10%', left: '10%' }}
            >
              <Image
                src={currentSlide.mainImage}
                alt="Main image"
                fill
                style={{ objectFit: 'cover' }}
                sizes="(max-width: 1024px) 100vw, 40vw"
              />
            </motion.div>

            {/* SecondaImage */}
            <motion.div
              key={`secondary-${currentSlideIndex}`}
              variants={imageVariants}
              initial="enter"
              animate="center"
              exit="exit"
              transition={{ duration: 0.55, delay: 0.1 }}
              className="absolute w-[60%] h-[60%] rounded-lg overflow-hidden shadow-2xl border-4 border-white"
              style={{ bottom: '0%', left: '0%' }}
            >
              <Image
                src={currentSlide.secondaryImage}
                alt="Secondary image"
                fill
                style={{ objectFit: 'cover' }}
                sizes="(max-width: 1024px) 60vw, 25vw"
              />
            </motion.div>
          </AnimatePresence>
        </div>
      </motion.div>
    </section>
  );
};

export default AboutSection;
