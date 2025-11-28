/**
 * @file ServiceCard.tsx
 * @description for using in the heropage to display services
 * @version 1.0.0
 * @date 27/11/2025
 * @author
 *  - Aswin Tk
 */

"use client";

import React from "react";
import { motion } from "framer-motion";
import { IconType } from "react-icons";
import { FaArrowRight } from "react-icons/fa6";


export interface ServiceCardProps {
  title: string;
  description: string;
  IconComponent: IconType;
}

const ServiceCard: React.FC<ServiceCardProps> = ({
  title,
  description,
  IconComponent,
}) => {
  return (
    <motion.div
      className="bg-white/10 bg-opacity-50 p-7 pb-9 rounded-2xl shadow-lg flex flex-col items-center text-center h-full max-w-xs mx-auto transition-all duration-300 cursor-pointer border-b-4 border-b-transparent group relative"
      whileHover={{
        scale: 1.03,
        boxShadow:
          "0 20px 40px rgba(0, 0, 0, 0.1), 0 0 0 4px rgba(59, 130, 246, 0.1)",
        backgroundColor: "#FFFFFF",
        y: -5,
        borderColor: "rgb(59, 130, 246)",
      }}
      transition={{ type: "spring", stiffness: 200, damping: 15 }}
    >
      {/* Icon */}
      <div className="text-3xl text-white p-4 rounded-full bg-linear-to-br from-blue-500 to-blue-600 mb-5 transform transition duration-500 group-hover:scale-105 group-hover:shadow-xl">
        <IconComponent />
      </div>

      {/* Title */}
      <h3 className="text-xl font-bold text-whi  mb-3">{title}</h3>

      {/* Description */}
      <p className="text-gray-600 text-sm line-clamp-3 mb-6 grow">
        {description}
      </p>

      {/* Explore Button  */}
      <motion.div
        className="flex items-center justify-center mt-auto text-blue-600 font-semibold overflow-hidden absolute bottom-4"
        whileHover={{ x: 5 }}
        transition={{ type: "tween", duration: 0.3 }}
      >
        <motion.span
          className="text-sm mr-1.5 whitespace-nowrap"
          initial={{ width: 0, opacity: 0, paddingRight: 0 }}
          whileHover={{ width: "auto", opacity: 1, paddingRight: 6 }}
          transition={{ duration: 0.3, ease: "easeInOut" }}
        >
          Explore
        </motion.span>

        <div className="text-lg">
          <FaArrowRight />
        </div>
      </motion.div>
    </motion.div>
  );
};

export default ServiceCard;
