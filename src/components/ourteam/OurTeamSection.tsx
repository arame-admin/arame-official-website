/**
 * @file OurTeamSection.tsx
 * @description for displaying the crew details
 * @version 1.0.0
 * @date 27/11/2025
 * @author
 *  - Aswin Tk
 */

'use client';

import React, { useRef, useState, useEffect, useCallback } from 'react';
import Image from 'next/image';
import { FaFacebookF, FaTwitter, FaLinkedinIn, FaDribbble } from 'react-icons/fa';

const TEAM_MEMBERS: TeamMember[] = [
  { id: 1, name: 'Andrew Max Fetcher', title: 'CEO, techwiz', imageUrl: '/images/about/Mission_2.jpg', socials: { facebook: '#', twitter: '#', linkedin: '#' } },
  { id: 2, name: 'Arnold Human', title: 'CEO, techwiz', imageUrl: '/images/about/Mission_1.jpg', socials: { facebook: '#', twitter: '#', linkedin: '#', dribbble: '#' } },
  { id: 3, name: 'Mike Holder', title: 'CEO, techwiz', imageUrl: '/images/about/vision_2.jpg', socials: { facebook: '#', twitter: '#' } },
  { id: 4, name: 'Joakim Ken', title: 'CEO, techwiz', imageUrl: '/images/about/vision_2.jpg', socials: { linkedin: '#' } },
  { id: 5, name: 'Sarah Connor', title: 'Lead Developer', imageUrl: '/images/about/vision_1.avif', socials: { linkedin: '#', twitter: '#' } },
  { id: 6, name: 'Eli Vance', title: 'R&D Director', imageUrl: '/images/about/vision_2.jpg', socials: { facebook: '#' } },
];

//  TEAM CARD 
const TeamCard: React.FC<{ member: TeamMember }> = ({ member }) => (
  <div className="group relative w-[280px] h-[350px] flex-none overflow-hidden rounded-lg shadow-xl cursor-grab">

    <Image
      src={member.imageUrl}
      alt={member.name}
      fill
      className="object-cover brightness-75 transition-transform duration-500 group-hover:scale-105"
      sizes="280px"
      priority={false}
    />

    <div className="absolute inset-0 bg-linear-to-t from-black via-black/40 to-transparent group-hover:from-black/80 transition-colors" />

    <div className="absolute top-4 right-4 flex flex-col space-y-2 opacity-0 group-hover:opacity-100 transition-opacity">
      {member.socials.facebook && <a href={member.socials.facebook} className="p-2 bg-blue-600/80 hover:bg-blue-600 text-white rounded-full"><FaFacebookF className="w-3 h-3" /></a>}
      {member.socials.twitter && <a href={member.socials.twitter} className="p-2 bg-blue-600/80 hover:bg-blue-600 text-white rounded-full"><FaTwitter className="w-3 h-3" /></a>}
      {member.socials.linkedin && <a href={member.socials.linkedin} className="p-2 bg-blue-600/80 hover:bg-blue-600 text-white rounded-full"><FaLinkedinIn className="w-3 h-3" /></a>}
      {member.socials.dribbble && <a href={member.socials.dribbble} className="p-2 bg-blue-600/80 hover:bg-blue-600 text-white rounded-full"><FaDribbble className="w-3 h-3" /></a>}
    </div>

    <div className="absolute bottom-0 p-6 text-white z-10 transition-transform duration-300 group-hover:-translate-y-2">
      <h3 className="text-xl font-bold">{member.name}</h3>
      <p className="text-sm opacity-80">{member.title}</p>
    </div>
  </div>
);

//  MAIN 
const OurTeamSection: React.FC = () => {
  const containerRef = useRef<HTMLDivElement>(null);

  const [activeIndex, setActiveIndex] = useState(0);
  const [cursor, setCursor] = useState<'grab' | 'grabbing'>('grab');

  const startX = useRef(0);
  const scrollStart = useRef(0);

  const cardWidth = 280;
  const gap = 24;
  const cardAndGap = cardWidth + gap;
  const perView = 3;
  const totalPages = Math.ceil(TEAM_MEMBERS.length / perView);

  //  DRAG HANDLERS 
  const beginDrag = useCallback((x: number) => {
    if (!containerRef.current) return;
    setCursor('grabbing');
    startX.current = x;
    scrollStart.current = containerRef.current.scrollLeft;
  }, []);

  const moveDrag = useCallback((x: number) => {
    if (cursor !== 'grabbing' || !containerRef.current) return;
    const dx = x - startX.current;
    containerRef.current.scrollLeft = scrollStart.current - dx;
  }, [cursor]);

  const endDrag = useCallback(() => setCursor('grab'), []);

  useEffect(() => {
    window.addEventListener('mouseup', endDrag);
    return () => window.removeEventListener('mouseup', endDrag);
  }, [endDrag]);

  const updateDots = () => {
    if (!containerRef.current) return;
    const index = Math.round(containerRef.current.scrollLeft / (cardAndGap * perView));
    setActiveIndex(index);
  };

  return (
    <section className="bg-white py-16 text-center">
      <div className="max-w-7xl mx-auto px-6">
        
        <p className="text-sm text-blue-600 font-medium uppercase tracking-widest">OUR EXPERT TEAM</p>
        <h2 className="text-4xl lg:text-5xl font-extrabold text-gray-900 mb-12">We have world expert team</h2>

        {/* CAROUSEL */}
        <div
          ref={containerRef}
          onScroll={updateDots}
          onMouseDown={(e) => beginDrag(e.clientX)}
          onMouseMove={(e) => moveDrag(e.clientX)}
          onTouchStart={(e) => beginDrag(e.touches[0].clientX)}
          onTouchMove={(e) => moveDrag(e.touches[0].clientX)}
          onTouchEnd={endDrag}
          className="flex space-x-6 overflow-x-auto pb-4 scroll-smooth no-scrollbar select-none justify-start"
          style={{ cursor }}
        >
          {TEAM_MEMBERS.map((m) => <TeamCard key={m.id} member={m} />)}
        </div>

        {/* DOT*/}
        <div className="flex justify-center mt-8 space-x-3">
          {Array.from({ length: totalPages }).map((_, i) => (
            <span
              key={i}
              className={`h-2.5 w-2.5 rounded-full transition-colors duration-300 ${i === activeIndex ? 'bg-blue-600' : 'bg-gray-300'}`}
            />
          ))}
        </div>

      </div>
    </section>
  );
};

export default OurTeamSection;
