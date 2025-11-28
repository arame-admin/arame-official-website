/**
 * @file ServicesSection.tsx
 * @description for displaying the serviceses that company provides
 * @version 1.0.0
 * @date 28/11/2025
 * @author
 *  - Aswin Tk
 */

'use client';

import React, { useRef, useEffect, useState, useCallback } from 'react';
import {
  FaArrowRight,
  FaArrowLeft,
  FaLightbulb,
  FaExchangeAlt,
  FaCodeBranch,
  FaChartLine,
  FaCloud,
  FaRobot,
} from 'react-icons/fa';
import { motion, useMotionValue, animate, AnimationPlaybackControls } from 'framer-motion';

const FEATURES_DATA: FeatureDetail[] = [
  {
    id: 1,
    icon: FaRobot,
    title: 'Digital Experience',
    description:
      'Creating immersive digital interactions using VR/AR. We help businesses transform user experiences through virtual and augmented reality applications.',
    imageUrl: '/images/about/value_1.webp',
  },
  {
    id: 2,
    icon: FaCloud,
    title: 'Intelligent Enterprises',
    description:
      'Deploying AI and IoT to automate smart systems and optimize operational efficiency across large organizations.',
    imageUrl: '/images/about/vision_2.jpg',
  },
  {
    id: 3,
    icon: FaChartLine,
    title: 'Product Engineering',
    description:
      'Full-cycle product development from concept to deployment, ensuring scalable and robust software solutions.',
    imageUrl: '/images/services/product-engineering.jpg',
  },
  {
    id: 4,
    icon: FaCodeBranch,
    title: 'Managed Agents',
    description:
      'AI-driven intelligent agents for automation, streamlining repetitive tasks and enhancing decision-making processes autonomously.',
    imageUrl: '/images/services/managed-agents.jpg',
  },
  {
    id: 5,
    icon: FaExchangeAlt,
    title: 'Cloud Infrastructure',
    description:
      'Modernizing and migrating legacy systems to secure, efficient, and cost-effective cloud platforms like AWS, Azure, and GCP.',
    imageUrl: '/images/services/cloud-infra.jpg',
  },
  {
    id: 6,
    icon: FaLightbulb,
    title: 'Data Analytics',
    description:
      'Turning raw data into actionable insights using advanced statistical models and visualization techniques to drive business growth.',
    imageUrl: '/images/services/data-analytics.jpg',
  },
];

const totalOriginalCards = FEATURES_DATA.length;
const CAROUSEL_DATA = [...FEATURES_DATA, ...FEATURES_DATA];
const CARD_GAP = 24;
const CARD_SCROLL_TIME = 4;
const SPEED_FACTOR = 0.7;

//Card

type CardRef = React.RefObject<HTMLDivElement | null>;

const truncateText = (text: string, limit: number) => {
  if (text.length <= limit) return text;
  return text.substring(0, limit) + '...';
};

const FeatureCard: React.FC<{ feature: FeatureDetail; cardRef?: CardRef }> = ({
  feature,
  cardRef,
}) => {
  const Icon = feature.icon;

  const TRUNCATION_LIMIT = 100;
  const limitedDescription = truncateText(feature.description, TRUNCATION_LIMIT);

  return (
    <motion.div
      ref={cardRef}
      className="relative shrink-0 w-[150%] h-[450px] mr-6 rounded-3xl overflow-hidden shadow-2xl cursor-pointer"

      style={{
        backgroundImage: `url(${feature.imageUrl})`,
        backgroundSize: 'cover',
        backgroundPosition: 'center',
      }}
      aria-hidden={false}
      whileHover="hover"
      initial="rest"
    >
      <div
        className="absolute inset-0"
        style={{
          background: 'linear-gradient(to top, rgba(0,0,0,0.85), rgba(0,0,0,0.25))',
        }}
      />

      <div className="absolute bottom-8 left-8 text-white z-10 w-[80%]">
        <Icon className="text-pink-500 mb-3" size={26} />
        <h3 className="text-2xl font-bold tracking-tight mb-2">{feature.title}</h3>

        <motion.div
          className="p-0"
          variants={{
            rest: { opacity: 0, y: 10, transition: { duration: 0.2 } },
            hover: { opacity: 1, y: 0, transition: { duration: 0.4 } },
          }}
        >
          <p className="mt-2 text-sm">{limitedDescription}</p>

          {feature.description.length > TRUNCATION_LIMIT && (
            <button className="mt-3 text-sm font-semibold text-pink-400 hover:text-pink-300">
              Show More →
            </button>
          )}
        </motion.div>
      </div>
    </motion.div>
  );
};

//ServicesSection

const ServicesSection: React.FC = () => {
  const carouselRef = useRef<HTMLDivElement | null>(null);
  const cardRef = useRef<HTMLDivElement | null>(null);
  const x = useMotionValue(0);

  const [cardTotalWidth, setCardTotalWidth] = useState<number>(0);
  const [isDragging, setIsDragging] = useState<boolean>(false);
  const [constraints, setConstraints] = useState<{ left: number; right: number }>({
    left: 0,
    right: 0,
  });

  const animationRef = useRef<AnimationPlaybackControls | null>(null);

  //compute measurements
  useEffect(() => {
    const update = () => {
      if (!carouselRef.current || !cardRef.current) return;

      const containerWidth = carouselRef.current.clientWidth;
      const singleCardWidth = cardRef.current.clientWidth;
      const totalWidth = singleCardWidth + CARD_GAP;
      setCardTotalWidth(totalWidth);

      const contentWidth = CAROUSEL_DATA.length * totalWidth;

      setConstraints({
        left: containerWidth - contentWidth,
        right: 0,
      });
    };

    update();
    window.addEventListener('resize', update);
    return () => window.removeEventListener('resize', update);
  }, []);

  //Auto-Scroll Loop Logic
  const startLoop = useCallback(() => {
    if (cardTotalWidth === 0 || isDragging) return;

    const distance = cardTotalWidth * totalOriginalCards;
    const totalDuration = totalOriginalCards * CARD_SCROLL_TIME;

    const target = -distance;

    animationRef.current?.stop?.();

    animationRef.current = animate(x, target, {
      duration: totalDuration * SPEED_FACTOR,
      ease: 'linear',
      repeat: Infinity,
      repeatType: 'loop',
      onRepeat: () => {
        x.set(0);
      },
    });
  }, [cardTotalWidth, isDragging, x]);

  //Start loop & restart after dragging
  useEffect(() => {
    if (cardTotalWidth > 0 && !isDragging) {
      const distance = cardTotalWidth * totalOriginalCards;
      const normalizedX = (x.get() % distance) + (x.get() < 0 ? distance : 0);
      x.set(-normalizedX);

      startLoop();
    }
    return () => {
      animationRef.current?.stop?.();
    };
  }, [cardTotalWidth, isDragging, startLoop, x]);

  // 3. Drag handlers
  const handleDragStart = useCallback(() => {
    setIsDragging(true);
    animationRef.current?.stop?.();
  }, []);

  const handleDragEnd = useCallback(() => {
    setIsDragging(false);

    if (cardTotalWidth === 0) {
      startLoop();
      return;
    }

    const currentX = x.get();
    const cardUnits = currentX / cardTotalWidth;
    const nearestIndex = Math.round(cardUnits);
    let targetX = nearestIndex * cardTotalWidth;

    targetX = Math.max(targetX, constraints.left);
    targetX = Math.min(targetX, constraints.right);

    animate(x, targetX, {
      type: 'spring',
      stiffness: 30,
      damping: 35,
      velocity: x.getVelocity() * 0.1,
      onComplete: () => {
        if (x.get() > 0) {
          const distance = cardTotalWidth * totalOriginalCards;
          x.set(-distance);
        }
        startLoop();
      },
    });
  }, [cardTotalWidth, constraints.left, constraints.right, x, startLoop]);

  // 4. Manual buttons
  const handleButtonClick = useCallback(
    (direction: 'next' | 'prev') => {
      if (!cardTotalWidth) return;

      animationRef.current?.stop?.();

      const currentX = x.get();
      let targetX;

      if (direction === 'prev') {
        targetX = Math.max(currentX - cardTotalWidth, constraints.left);
      } else {
        targetX = Math.min(currentX + cardTotalWidth, constraints.right);
      }

      const buttonAnimation = animate(x, targetX, {
        duration: 0.5,
        type: 'spring',
        stiffness: 30,
        damping: 35,
        onComplete: () => {
          if (x.get() >= 0 && direction === 'next') {
            const distance = cardTotalWidth * totalOriginalCards;
            x.set(-distance);
          }
          startLoop();
        },
      });

      animationRef.current = buttonAnimation;
    },
    [cardTotalWidth, constraints.left, constraints.right, x, startLoop]
  );

  //5 Hover pause/resume
  const handleMouseEnter = useCallback(() => {
    animationRef.current?.pause();
  }, []);

  const handleMouseLeave = useCallback(() => {
    if (!isDragging) {
      animationRef.current?.play();
    }
  }, [isDragging]);

  return (
    <section className="bg-white py-16 lg:py-20 overflow-hidden">
      <div className="max-w-7xl mx-auto px-6" ref={carouselRef}>
        {/* Header */}
        <div className="flex justify-between items-end mb-12">
          <div>
            <p className="text-sm uppercase tracking-widest text-pink-600 font-semibold">
              OUR SOLUTIONS
            </p>
            <h2 className="text-4xl lg:text-5xl font-extrabold text-gray-900">
              Designed for Smarter, Faster, and Distinctive Outcomes
            </h2>
            <p className="text-gray-500 mt-2 max-w-2xl">
              Explore the strategic pillars that drive innovation.
            </p>
          </div>

          <div className="flex space-x-4">
            <button
              onClick={() => handleButtonClick('prev')}
              className="w-12 h-12 flex items-center justify-center border border-pink-600 text-pink-600 rounded-full hover:bg-pink-50"
            >
              <FaArrowLeft />
            </button>
            <button
              onClick={() => handleButtonClick('next')}
              className="w-12 h-12 flex items-center justify-center bg-pink-600 text-white rounded-full hover:bg-pink-700"
            >
              <FaArrowRight />
            </button>
          </div>
        </div>

        {/* carousel */}
        <motion.div
          className="flex pt-4 w-fit cursor-grab"
          style={{ x }}
          drag="x"
          dragConstraints={constraints}
          onMouseEnter={handleMouseEnter}
          onMouseLeave={handleMouseLeave}
          onDragStart={handleDragStart}
          onDragEnd={handleDragEnd}
          dragElastic={0.12}
          whileTap={{ cursor: 'grabbing' }}
        >
          {CAROUSEL_DATA.map((feature, i) => (
            <FeatureCard
              key={`${feature.id}-${i}`}
              feature={feature}
              cardRef={i === 0 ? cardRef : undefined}
            />
          ))}
        </motion.div>
      </div>
    </section>
  );
};

export default ServicesSection;
