# NutriBuddy - Step 1 Requirement Freeze (MVP)

Date: 2026-03-31
Project: Laravel ecommerce backend + admin panel

## 1) Scope Locked For MVP

### Business Scope
- India-only ecommerce for kids nutrition products.
- Products include gummies, tablets, and similar SKUs.
- Product variants will be supported at architecture level from day one.
- Variants can be enabled/disabled through admin settings.
- Taxation, coupons, COD, and Razorpay must be available.
- Blog, newsletter capture, and contact leads are in MVP scope.
- Admin email notifications for key events are in scope.
- Role-based admin panel for staff users is in scope.

### Explicit Constraints
- Country: India only.
- Currency: Single currency only (`INR`).
- Subscriptions: Out of scope for this phase (keep module blank/placeholders only).
- Shipping provider integration (Shiprocket or equivalent): Not implemented in MVP, but structure must remain integration-ready.

## 2) Customer Account MVP Modules

- Overview
- My Orders
- My Subscriptions (placeholder only, no business logic in this phase)
- Support Tickets
- My Profile

## 3) Admin Panel MVP Modules

- Dashboard (orders/revenue/basic KPIs)
- Catalog:
  - Categories
  - Products
  - Product variants
  - Inventory
- Tax management (India GST-ready structure)
- Coupon management
- Orders and payments
- Leads:
  - Newsletter data
  - Contact form leads
- Blog management
- Support ticket management
- Staff users + roles + permissions

## 4) Payment and Communication

- Payment methods:
  - Razorpay (online)
  - Cash on Delivery (COD)
- Notifications:
  - Admin email notifications on new order, new lead, new support ticket
  - WhatsApp OTP planned in later phase (define integration points only in MVP)

## 5) Non-Goals For This Phase

- Subscription lifecycle and recurring billing automation
- Live shipping aggregation/label generation integration
- Multi-currency or multi-country support

## 6) Data/Architecture Decisions (Locked)

- Keep currency fields but default all transactions to `INR`.
- Product model must support both:
  - Non-variant products
  - Variant-based products (future-ready)
- Payment integration must use a gateway service interface to keep Razorpay isolated and replaceable.
- Shipping must use an adapter-style interface, even if adapter is not implemented now.
- Role/permission checks must gate all admin routes and actions.

## 7) Step 1 Acceptance Checklist

- [ ] This document approved by product/business owner.
- [ ] MVP features vs future features are explicitly separated.
- [ ] India-only and INR-only constraints approved.
- [ ] Subscriptions marked as placeholder only.
- [ ] Admin and customer module boundaries approved.
- [ ] Day-1 and Day-2 implementation checklist approved.

## 8) 2-Day Execution TODO (Updated)

### Day 1 - Foundation + Schema
- [ ] Finalize status dictionaries:
  - order_status
  - payment_status
  - ticket_status
- [ ] Create schema and models for:
  - categories, products, product_variants, inventories
  - taxes, coupons
  - orders, order_items, payments
  - customer_addresses
  - support_tickets
  - blog_categories, blog_posts
  - newsletter_subscribers, contact_leads
- [ ] Add `INR` defaults and validation guards (single-currency mode).
- [ ] Setup admin staff auth + RBAC.
- [ ] Protect admin routes with permissions.
- [ ] Seed super-admin role and baseline permissions.

### Day 2 - Admin CRUD + Transaction Flow
- [ ] Build CRUD for catalog and inventory.
- [ ] Build tax and coupon CRUD with validations.
- [ ] Build order list/detail/update workflow.
- [ ] Add COD flow and Razorpay create/verify endpoints.
- [ ] Build blog, newsletter, and contact lead admin pages.
- [ ] Build support ticket list/detail/status update.
- [ ] Trigger admin email notifications for order/lead/ticket events.

## 9) Immediate Next Step After Approval

Start Step 2: create migrations and Eloquent models from the locked scope above.