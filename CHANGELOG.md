# Changelog 

[Unreleased changes](https://github.com/rapidez/checkout-theme/compare/4.0.1...master)
## [4.0.1](https://github.com/rapidez/checkout-theme/releases/tag/4.0.1) - 2025-06-19

### Fixed

- Typo (#177)

## [3.1.2](https://github.com/rapidez/checkout-theme/releases/tag/3.1.2) - 2025-06-19

### Fixed

- Typo (#176)

## [4.0.0](https://github.com/rapidez/checkout-theme/releases/tag/4.0.0) - 2025-06-05

### Added

- Rapidez v4 support (d48aad5)

## [3.1.1](https://github.com/rapidez/checkout-theme/releases/tag/3.1.1) - 2025-04-22

### Fixed

- Remove unnecessary rewrite (#175)

## [3.1.0](https://github.com/rapidez/checkout-theme/releases/tag/3.1.0) - 2025-04-17

### Added

- Region select (#170)

### Changed

- Require rapidez/core 3.5 (#174)

## [3.0.1](https://github.com/rapidez/checkout-theme/releases/tag/3.0.1) - 2025-04-02

### Fixed

- Default on company_show fix (#168)
- Fix crosssells (#171)
- Remove unnecessary translation (#173)

## [2.12.0](https://github.com/rapidez/checkout-theme/releases/tag/2.12.0) - 2025-04-02

### Changed

- Sort countries in country select (#166, #167)

### Fixed

- Default on company_show fix (#169)
- Fix crosssells (#172)

## [3.0.0](https://github.com/rapidez/checkout-theme/releases/tag/3.0.0) - 2025-01-29

### Added

- Rapidez v3 support (#118, #126, #147, #148, #149, #152, #153, #156, #159, #160)

### Changed

- Move card component outside of includes for more extendability (#139)
- Removed hacky absolute styling (#141)
- Listen to newsletter/general/active (#157)
- Enhance out of stock message (#143)

### Fixed

- Fix translations (#161)



## [2.11.2](https://github.com/rapidez/checkout-theme/releases/tag/2.11.2) - 2025-01-08

### Fixed

- Only show label if it has content (#158)
- Remove double label in country select (#164)

## [2.11.1](https://github.com/rapidez/checkout-theme/releases/tag/2.11.1) - 2024-11-26

### Fixed

- Fix closing tag (#146)
- Clone address to remove reactivity (#145)

## [2.11.0](https://github.com/rapidez/checkout-theme/releases/tag/2.11.0) - 2024-11-19

### Changed

- Use the resizedPath helper (01eaa98)

## [2.10.0](https://github.com/rapidez/checkout-theme/releases/tag/2.10.0) - 2024-11-19

### Added

- Added default header and footer (#138)

### Changed

- Revert #127 (80fc797)

## [2.9.2](https://github.com/rapidez/checkout-theme/releases/tag/2.9.2) - 2024-11-08

### Fixed

- Input v-cloak fix (#133)
- Use v-model variable for is_subscribed (#136)

## [2.9.1](https://github.com/rapidez/checkout-theme/releases/tag/2.9.1) - 2024-11-06

### Fixed

- Make sure you actually log in from the checkout (#121)

## [2.9.0](https://github.com/rapidez/checkout-theme/releases/tag/2.9.0) - 2024-11-05

### Added

- VAT check in register page (#129)
- Disable checkout button and add notice if not in stock (#127)

### Changed

- Changed breakpoints for smaller screens (#124)

## [2.8.0](https://github.com/rapidez/checkout-theme/releases/tag/2.8.0) - 2024-10-31

### Added

- Forgot password link at checkout login (#122)

## [2.7.0](https://github.com/rapidez/checkout-theme/releases/tag/2.7.0) - 2024-10-29

### Added

- Dutch translations (#119)

## [2.6.0](https://github.com/rapidez/checkout-theme/releases/tag/2.6.0) - 2024-10-22

### Added

- Backorder count to cart (#117)
- VAT change event (#120)

### Fixed

- Fix address popup when list is to long | Fix text alignment (#116)

## [2.5.2](https://github.com/rapidez/checkout-theme/releases/tag/2.5.2) - 2024-09-16

### Fixed

- Fix the product image because catalog/product is already in the image url (#115)
- Make back button work (#112)
- Fix cart summary(#113)
- Fix missed v-bind (#97 & #114)

## [2.5.1](https://github.com/rapidez/checkout-theme/releases/tag/2.5.1) - 2024-08-27

### Fixed

- Make cart items relative to make absolute usage easier (#111)

## [2.5.0](https://github.com/rapidez/checkout-theme/releases/tag/2.5.0) - 2024-08-20

### Added

- Change email option and fixed the change password option (#106)

### Fixed

- Add default to isPartOfAnotherForm prop (#104)
- Override account layout partial (#105)
- Typo (#107)
- Use the right value for logged in email (#108)
- Re-add isPartOfAnotherForm (#109)

## [2.4.0](https://github.com/rapidez/checkout-theme/releases/tag/2.4.0) - 2024-08-16

### Changed

- Move card outside of include to reduce need for overwrites (#98)

### Fixed

- Disable GraphQL cache on the order view (#99)
- Removed rounded-full from quantity component (#102)
- Fix empty expression error (#103)
- Newsletter on checkout success for logged in customers fix (#101)

## [2.3.2](https://github.com/rapidez/checkout-theme/releases/tag/2.3.2) - 2024-06-20

### Fixed

- Remove extra parentheses (#96)

## [2.3.1](https://github.com/rapidez/checkout-theme/releases/tag/2.3.1) - 2024-06-18

### Fixed

- Fix the newsletter subscribe to not mutate right away (#94)
- Rapidez v2 compatibility fixes (#95)

## [2.3.0](https://github.com/rapidez/checkout-theme/releases/tag/2.3.0) - 2024-05-28

### Added

- Added postcode-change event to checkout address form (#92)

### Changed

- Visual optimizations (#93)

## [2.2.0](https://github.com/rapidez/checkout-theme/releases/tag/2.2.0) - 2024-05-14

### Changed

- Split templates up like in 1.x (#80)

### Fixed

- Add :$id to checkbox (#78)
- Address cards popup (#82)
- Add addressIndex to loop (#84)
- Remove extra coupon field (#81)
- Use border-ct-border (#87)
- Rapidez v2 compatibility (#86)
- Use correct item image check (#89)
- Update remove button to 2.x (#91)

## [1.5.3](https://github.com/rapidez/checkout-theme/releases/tag/1.5.3) - 2024-05-08

### Fixed

- Add addressIndex to loop (#85)

## [1.5.2](https://github.com/rapidez/checkout-theme/releases/tag/1.5.2) - 2024-05-08

### Fixed

- Add mutating slot (#83)

## [2.1.0](https://github.com/rapidez/checkout-theme/releases/tag/2.1.0) - 2024-05-06

### Changed

- Split up files to make confira override easier (#66)

### Fixed

- Add "delete" button to address cards (#72)
- Add fallbacks for address card (#73)
- Fix attributes error (#76)

## [1.5.1](https://github.com/rapidez/checkout-theme/releases/tag/1.5.1) - 2024-05-06

### Fixed

- Add :$id to newsletter checkbox (#79)

## [1.5.0](https://github.com/rapidez/checkout-theme/releases/tag/1.5.0) - 2024-05-06

### Changed

- Split templates in to smaller views for easier individual overwrites (32ffc93)

### Fixed

- Add "delete" button to address cards (#75)
- Add fallbacks for address card (#74)
- Fix attributes error (#77)

## [2.0.0](https://github.com/rapidez/checkout-theme/releases/tag/2.0.0) - 2024-03-13

### Added

- Rapidez v2 compatibility (#68)

## [1.4.0](https://github.com/rapidez/checkout-theme/releases/tag/1.4.0) - 2024-03-12

### Added

- Allow address cards to be disabled (#69)
- Newsletter subscription on checkout success (#60)
- Fire postcode change events (#71)

### Fixed

- Add SKU to product listing in account orders (#70)

## [1.3.0](https://github.com/rapidez/checkout-theme/releases/tag/1.3.0) - 2024-01-30

### Added

 - Add option to make the user create an address during registration (#63)
 - Show a button to select address + frontend validation if default address is missing (#64)

### Changed

 - Add newsletter to checkout & splice up cart products listing into separate parts (#62)

### Bugfix

- Use proper config path (but still keep fallback) (#65)






## [1.2.0](https://github.com/rapidez/checkout-theme/releases/tag/1.2.0) - 2023-12-15

### Added

- Cross-sells (#57)

### Changed

- Use new payment icons (#59)

### Bugfix

- Only show title in account center if it exists (#61)

## [1.1.1](https://github.com/rapidez/checkout-theme/releases/tag/1.1.1) - 2023-12-07

### Fixed

-  Fix import & Moved button to own file for override (https://github.com/rapidez/checkout-theme/pull/58)

## [1.1.0](https://github.com/rapidez/checkout-theme/releases/tag/1.1.0) - 2023-12-05

### Changed

- Removed margin and added components in the cart (#53)
- Move config file to Rapidez folder (#55)
- Split up to more blade files to make override easier (#56)

### Fixed

- Table responsive styling (#54)

## [1.0.1](https://github.com/rapidez/checkout-theme/releases/tag/1.0.1) - 2023-11-14

### Fixed

- Fix image names (#51)
- Support MSP way of saving method_title (#52)

## [1.0.0](https://github.com/rapidez/checkout-theme/releases/tag/1.0.0) - 2023-11-10

Initial release

