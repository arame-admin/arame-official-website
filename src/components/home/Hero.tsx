/**
 * @file Hero.tsx
 * @description for displaying the landing page of the homepage
 * @version 1.0.0
 * @date 27/11/2025
 * @author
 *  - Aswin Tk
 */

"use client";

import Image from "next/image";
import { motion, Variants } from "framer-motion";
import Navbar from "../layouts/Navbar";

const containerVariants: Variants = {
  hidden: {},
  visible: {
    transition: {
      staggerChildren: 0.1,
      delayChildren: 0,
    },
  },
};

const itemVariants: Variants = {
  hidden: { opacity: 0, y: 20 },
  visible: {
    opacity: 1,
    y: 0,
    transition: {
      duration: 0.6,
      ease: [0.25, 1, 0.5, 1],
    },
  },
};

const Hero: React.FC = () => {
  return (
    <section className="relative min-h-screen  overflow-hidden">
    
      <div className="absolute inset-0 h-full">
        <Image
          src="/images/hero/hero-background.jpg"
          alt="IT professional working"
          fill
          style={{ objectFit: "cover" }}
          priority
          className="filter brightness-[0.5] contrast-[0.8] saturate-[1.2]"
        />

        <div className="absolute hero-angular-gradient z-0"></div>

        <div className="absolute inset-0 bg-black opacity-30 z-0"></div>
      </div>

      {/* Main  */}
      <div className="relative z-10 w-full mx-auto ">

        <Navbar/>
       
        <motion.div
          className="max-w-3xl text-white pb-48 px-22 pt-50"
          variants={containerVariants}
          initial="hidden"
          animate="visible"
        >
          <motion.p
            className="uppercase text-xs font-semibold tracking-widest mb-3 text-blue-300"
            variants={itemVariants}
          >
            TECHNOLOGY RELATED CONSULTANCY
          </motion.p>

          <motion.h1
            className="text-5xl lg:text-6xl font-bold leading-tight mb-6"
            variants={itemVariants}
          >
            Clarity in Purpose, <br /> Precision in Code.
          </motion.h1>

          <motion.p
            className="text-md text-gray-200 mb-10 max-w-lg"
            variants={itemVariants}
          >
            We prioritize clarity in purpose by first defining the strategic
            vision, responsibility, and impact we aim for. This ensures
            precision in code — delivering efficient and high-value solutions.
          </motion.p>

          <motion.button
            className="bg-blue-400 hover:bg-blue-600 text-white font-semibold py-3 px-8 rounded-4xl shadow-lg transition duration-300"
            variants={itemVariants}
          >
            Read More
          </motion.button>
        </motion.div>
      </div>
    </section>
  );
};

export default Hero;
