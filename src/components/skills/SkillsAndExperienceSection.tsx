/**
 * @file SkillsAndExperienceSection.tsx
 * @description for displaying the skills and experience level
 * @version 1.0.0
 * @date 27/11/2025
 * @author
 *  - Aswin Tk
 */

'use client';

import React from 'react';
import { FaArrowRight } from 'react-icons/fa';

const skills: Skill[] = [
 
  { name: 'IT Management', percentage: 80 },
  { name: 'Data Security', percentage: 95 },
  { name: 'Information Technology', percentage: 90 },
  { name: 'Technology Consultant', percentage: 90 },
];

const SkillBar = ({ name, percentage }: Skill) => (
  <div className="mb-6">
    <div className="flex justify-between mb-1">
      <p className="text-gray-900 text-sm font-medium">{name}</p>
     
      <span className="text-white text-xs font-bold px-2 py-0.5 bg-black rounded">
        {percentage}%
      </span>
    </div>

    <div className="w-full h-2 bg-gray-200 rounded-full">
      <div
        className="h-full rounded-full bg-blue-600 transition-all duration-1000"
        style={{ width: `${percentage}%` }}
      />
    </div>
  </div>
);

const SkillsAndExperienceSection = () => (
  <section className="bg-white py-24 md:py-32">
    
    <div className="max-w-7xl mx-auto px-6 grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20">

      <div>
       
        <h2 className="text-3xl lg:text-4xl font-extrabold text-gray-900 leading-tight">
          Preparing for your success, <br />
          we provide truly prominent <br />
          IT solutions
  
        </h2>

        <div className="flex mt-10 items-start space-x-6">
          

          <div
            className="w-40 h-40 flex flex-col items-center justify-center text-white font-extrabold rounded-md p-4 text-center shrink-0"
            style={{
        
              background: 'linear-gradient(to bottom, #3b82f6, #a855f7)',
              boxShadow: '0 10px 20px rgba(0, 0, 0, 0.2)'
            }}
          >
            <span className="text-6xl leading-none"></span>
            <span className="text-sm font-semibold mt-2">Years of experience</span>
          </div>

          <div>
            <p className="text-gray-600 mb-4 leading-relaxed mt-2">
              Accelerate innovation with world-class tech teams. We will match you to an entire remote team of incredible freelance talent for all your software development needs.
            </p>

            <a
              href="/about"
              className="text-blue-600 font-semibold inline-flex items-center group mt-4"
            >
              Learn More About Us
              <FaArrowRight className="ml-2 w-3 h-3 transition-transform group-hover:translate-x-1" />
            </a>
          </div>
        </div>
      </div>

      <div className="pt-4 lg:pt-0">
        {skills.map((skill) => (
          <SkillBar key={skill.name} {...skill} />
        ))}
      </div>
    </div>
  </section>
);

export default SkillsAndExperienceSection;