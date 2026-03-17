<?php
session_start();

$user = $_SESSION['utilisateur'] ?? null;

$logoB64 = '/9j/4AAQSkZJRgABAQEAYABgAAD/2wBDAAUDBAQEAwUEBAQFBQUGBwwIBwcHBw8LCwkMEQ8SEhEPERETFhwXExQaFRERGCEYGh0dHx8fExciJCIeJBweHx7/2wBDAQUFBQcGBw4ICA4eFBEUHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh7/wAARCAFpAWkDASIAAhEBAxEB/8QAHwAAAQUBAQEBAQEAAAAAAAAAAAECAwQFBgcICQoL/8QAtRAAAgEDAwIEAwUFBAQAAAF9AQIDAAQRBRIhMUEGE1FhByJxFDKBkaEII0KxwRVS0fAkM2JyggkKFhcYGRolJicoKSo0NTY3ODk6Q0RFRkdISUpTVFVWV1hZWmNkZWZnaGlqc3R1dnd4eXqDhIWGh4iJipKTlJWWl5iZmqKjpKWmp6ipqrKztLW2t7i5usLDxMXGx8jJytLT1NXW19jZ2uHi4+Tl5ufo6erx8vP09fb3+Pn6/8QAHwEAAwEBAQEBAQEBAQAAAAAAAAECAwQFBgcICQoL/8QAtREAAgECBAQDBAcFBAQAAQJ3AAECAxEEBSExBhJBUQdhcRMiMoEIFEKRobHBCSMzUvAVYnLRChYkNOEl8RcYGRomJygpKjU2Nzg5OkNERUZHSElKU1RVVldYWVpjZGVmZ2hpanN0dXZ3eHl6goOEhYaHiImKkpOUlZaXmJmaoqOkpaanqKmqsrO0tba3uLm6wsPExcbHyMnK0tPU1dbX2Nna4uPk5ebn6Onq8vP09fb3+Pn6/9oADAMBAAIRAxEAPwD5Sooor0jkCiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACilCt6Uu33H50WYrobRTtv8AtCjb/tL+dFguNop21vSm0AFFFFAwooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKAClAJ6UoX169gKsC1k2hpmSBO288/lVRg5bESmluV/lHufajcf4cD6Vb22cQyVeT3Y7Qfw60fbynEEMUfvt5rTkS+KViOdv4YldILiQ/JDI30U1MNOvCP8AUMv+8QP51HJeXUn3riTHoDj+VQkk9ST9TSvSXd/h/mP955L8f8i1/Z11/cT/AL+L/jQdOvf+eBP0INVKUEjoSKV6fZ/f/wAALVO6+7/gkj29xH9+GRfqppm5hwefrUkd1cx/cnkHtu4qcahIw2zxxyj1K800qb2bQm6i3SZU+U/7NIQRVv8A0SbpGyH/AGDn9D/Sm/ZWILW8iTDuo4b8jR7J9NfQaqrroVaKey84wVbupplZNWNEwooooGFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRTo0eRwkalmPQChK4m7DatR2pVBLcMIlPTPU/QU8eTZDPyzXHbuqf4mqzNJPKWdizHqSelbcqhvq+xlzOe2iLC3G07bSIIe8jct9c9qgeTDbtxd+7tz+VNdhjYnC9z60yplUbKjBIUkk5PJpKKKzNArQ0PRtR1q4MOn25k2/fcnCJ9TVO2he4uIreMZeVwi/UnFewX89j4K8LqsMQdlwiL0MspHJJ/X6V7OUZZDF89WvLlpw1b/AER4+bZlPC8lKjHmqT0S/U5VfhrqJjy2pWgfHQKxH51zniDw7qmhsDewgxMcLNGdyE+mex+tXZPHHiR7jzheogzxGsS7PpXeeFdZtvFuiz2t/bp5qjZcRD7rA9GHp/QivUo4PKMybo4XmhPpfZ/i/wBDzKuLzXL0q2J5Zw623X4L9Tx+iruu2DaXrF1p7EnyZCqk917H8qpV8pUpypzcJbrQ+opzjUipx2eoVKsmSN+Q3Zx1FRUUk7FNXLZuGwFuo1nTs3f8DQ1ssyl7Z/Mx1U8MPqO9V0fA2sMqeooO6NwyMfVWFa89/i1/My5LfDp+Q08HB4NJV0SRXg2z4jn7Sdm+v+NVp4pIX2SLg9vQj2qJQsrrVFRnd2ejI6KKKg0CiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKdGjSOEQZYnAFC1FcWGN5pBHGMk/pVlpI4UMNuc8fvJfX2HtTZ3W3jNvC2WP+tcd/Ye1V24AX8TWt/Z6Lcytz6vYTlm9zT3O0eWp/wB4+poT5EMnc8L/AI1HWeyNN2FFFFIoKKKKALugzpba5Y3En3I7hGb6ZFejfF2znuNDguoVZ0tpS0gHOFIxu/z615ZXo3gvxrbfY00zXJAhRdiTsMqy9MP/AI19HkmJoSo1cDXlyqps+zXf8D57OcPXjWpY2jHmcN15GnpHgfQZ9Bs7qazlZ5oFYy+awyxUE45x3rK+ENjMk+oXxVhAQIUJ/jIOTj6f1r0uPyf+Eftfs+zyd58vZ93bgYx7YrgfFHjTTtNsmsdDaKW4wVVox+7h9/c+1fVV8JgcDKlipWhyX2WsnZJev/BPmKGLxuNjVw0by52t3pFXv8jjPiBPHceML94yCqsI8j1VQDWDSszMxZmLMxySepNJX5xiazr1p1X9pt/ez9Cw1FUKMKS+ykvuCiiisTYKfGw+433T+h9aZRQnYTVxzAo2D1FWIpkaMQ3GTEfusOqH/CoT88X+0n6impz8vrVxk4vQiUVJaj7iFoX2tggjKsOjCoqs28qsn2e4/wBWT8rd0Pr9KinieGUxv1HcdCPWiUVbmjsEZO/LLcjoooqDQKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACrg/0SDP8Ay3lHH+wv+JqOyjVnaWT/AFUY3N7nsKimkaWVpG6sa0j7kebq9jKXvy5eg1RlvbvRyze5NKv3WP4U6H7xb+6CahLZFtiTH5to6LxTKKKTdxpWQUUUUDCiiigApG+6fpS0jfdP0pAfQ2if8iRpP/XNf/QFr58l/wBdJ/vn+dfQeif8iRpP/XNf/QFr58l/10n++f519nxT/Aw//b3/ALafH8MfxsR8v/bhtFFFfGn2AUUUUAFFFFADo22uCenf6UOu1yvoabUknKo3qMH8KfQnqNfrn1qzD/pUAt2/1qD90fUf3arfwfQ0isVYMpwQcg1UZcr8hSjdeYh4ODRVq8USIt0gwH4cDs3/ANeqtKceV2HCXMrhRRRUlBRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFWLBFafe/3IwXb8KcY8zSJlLlTY67/AHMMdqOo+eT/AHj2/CqtOldpJGkbqxyabTnLmegoRstRx+4PrTl4hc+pAprfdWnf8sP+Bf0oQ2R0UUVJQUUUUAFFFFABSN90/SlpG+6fpSA+htE/5EjSf+ua/wDoC18+S/66T/fP86+g9E/5EjSf+ua/+gLXz5L/AK6T/fP86+z4p/gYf/t7/wBtPj+GP42I+X/tw2iiivjT7AKKKKACiiigAqQcwH2ao6kT/VSfh/OnEmQ1ejD2ptOTv9KbSGWbBgzNbufklGPo3Y1XZWVirDBBwaBwcjrVm/8A3gjuR/y0X5v94da0+KHp+RHwz9SrRRRWZoFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAVaX93prHvM+PwH/ANeqtWr/AOQQQ/3Ixn6nmtIaJy/rUznq1H+tCrRRRWZoOb7q07/lh/wL+lN/5Zj2NOTmJx6YNUiWR0UUVJQUUUUAFFFFABSN90/SlpG+6fpSA+htE/5EjSf+ua/+gLXz5L/rpP8AfP8AOvoPRP8AkSNJ/wCua/8AoC18+S/66T/fP86+z4p/gYf/ALe/9tPj+GP42I+X/tw2iiivjT7AKKKKACiiigAqRP8AVSfhUdSdIPq38v8A9dOJMhqd/pTacv3WNNpDCrUH7ywmj7oRIv8AI1Vqzpp/0sIejgofxFaUvit30Iq/DftqVqKVhtYqeoOKSszQKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigB0a7pFX1IFTai269l9A2B+FJYjdeQj/bFRzndPIfVj/OtP+Xfz/r8zP/l58hlFFFZmg5fusPxpYfv7ezDFNU4YGgja1NPqS10EPWipJeSHHRv596jpNWY07oKKKKBhRRRQAUjfdP0paRvun6UgPobRP+RI0n/rmv8A6AtfPkv+uk/3z/OvoLQ2X/hC9KTcNwiUkZ5+4tfPsv8ArpP98/zr7Pin+Bh/+3v/AG0+P4Y/jYj5f+3DaKKK+NPsAooooAKKKKACpJeAieg5+ppIhl+fujk0jEs5Pcmn0J6gfuD3NNpz9cenFNpMaCnwtsmRvRgaZRQnZg1dE9+u28lUdNxNQVa1P/j7J9VU/pVWrqq036kUneCCiiioNAooooAKKKKACiiigAooooAKKKKACiiigAooooAsad/x/Q/7wqGX/WN9TUlicXkJ/wBsU24GLiQf7Z/nWn/Lv5mf/Lx+hHRRRWZoFOPK57jg02lU4Pt3oQmPj+YGM9+n1qOlYYP8qe37xd4+8Pve/vVbi2I6KKKkoKKKKACtHQNHvNav1tLWNiMjzZO0a+pNX/CPha916USc29ip+ecjr7L6n9BW9r/iWx0OybQ/CyqpGRLcjnB74P8AE3v27V6+Ey6Kp/WcW+Wn07y8l/meTi8wk6n1bCrmqde0fN/5HoVhbi0sYLUMXEMSx7iMZwMZrxrxd4fu9C1BlkV5LaRiYp8cN7H0PtXf6P4usV8H/wBoTLKXtAkEiEgs744IPv1/Ouc8M+LoZoG0fxKouLKT5VlcZKDsG9R79RX1WdVsvx1OjSc+VtXi+i2VpeTtv0sfM5PSx+CqVaqhzJO0l1fW681263OIorq/F/g+bS1N/pzG601hu3A7mjB9cdR71ylfD4vCVsJUdOsrP8/NeR9nhcXSxVNVKTuv63CiiiuY6QooqRAFHmN/wEepoSuJuwN8ke3u3Lf0FNXgFvypOWb1JpWPYdBTuKw2iiikUFFFFAFrUv8AXr/1zX+VVatan/x+MPRVH6VVrSt8bM6XwIKKKKzNAooooAKKKKACiiigAooooAKKKKACiiigAooooAcjbXVvQg1NqS7b2X0Jz+dV6tX3zpBN/ejwfqOK0jrBozlpNMq0UUVmaBRRRQA4cjafwNALI2RwRTacCCMN+BpoQ5lDjcnB7r6fSo6X5lbuDT/lk+9hG9ex/wAKe4tiOu08JeDfOh/tXXz9lsUG8Rudpcerei/qav8Aww8O2s0DazexrK6yFYEblVx1b3PpVT4tahetrEemmRltFiWQIOA7HPJ9elfR4bLKeDwizDFR5r/DH8nLy8j57E5jPF4p4HDS5bfFL80vPzIPF/jA3kR0rRV+y6cg2FlG0yD0Hov8646iivExmNrYyp7Sq7v8EuyPZwmDpYSn7OktPxfmxwdxGYwxCEglc8Ejof1NNoorludJ03g7xbc6IwtbkNc6cxw0Z5MeepX/AArZ8SeErTU7T+2vC7JLHINzW6dD67fQ/wCzXAV0/wANb+8t/E1vaQSP5FwxE0fYgAnPsR6172XY2OIUcFilzQbtF9Yt9vLy/wCGPEzDByoOWMwr5ZJXa6SS7+fmcyysrFWUqwOCCMEGkr1P4l+HrW602bWLeNY7uABpCBjzVzjn3HrXmGEj64dvTsK5M0yupl1f2U3dbp90dWW5lTx9H2kVZ7NdmIqgDe/3ew7mkdi7Z/IDtQxZ2yeTR93p19fSvNPQA/KMd+9NoopDCiiigYU+Bd88a+rAfrTKs6aB9p8w9I1Ln8BVU1eSRE3aLYy+bfeSt/tmoaUksST1NJSk7tscVZJBRRRSKCiiigAooooAKKKKACiiigAooooAKKKKACiiigAq0n73T3X+KJtw+h61VqxYOq3AV/uOCjfjV0371n1M6i92/Yr0U+aNopWjbqpwaZUNW0LTvqFFFFAwooooAcG4weRQV7ryKbSjii4rHR+E/F13oFrLarbx3MLtvVWYrsbvjHrxR4q8Sx+IoofP09LaeEnZKjlvlPVSK53cD94fiKNo7N+deh/aeKeH+rOd4dtP+HOH+zsN7f6xyWn31/4Yd5ZP3WVvxpDHIOqN+VNKt6UBmHQkVwadjt17i7W/un8qBHIeiN+VHmSf32/OkLMerE/jRoGo/wAph94qv1NbPhbXIfD9zJdJYrd3DLtV2cqEHfH1rDCsexpduPvMBW1CvOhUVSno1s9/z0Mq9GFeDp1NU91/wx1PiXxteazpbaeLSO2jdgZCrliwHbn3rlgvc8D1oyB0H4mkJJPNXisZWxc/aV5czIwuEo4WHs6MeVClsDC/nTaKK5bnSFFFFAwooooAKtRfu7CWTvKQi/TqarAEkAck9Ks3+EMdup4iXB/3j1rSGicv61M56tR/rQq0UUVmaBRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFXbTStUu08y1067mT+8kRIqK8sryzbbd2k9uf8AppGV/nWjo1FHncXbvbQzVam5cqkr9rj7v99bx3Q+99yT6joaqVYspVRzHJ/qpBtb29DTXtpxO8KxSSMvXYpbj14pyTnaSFF8l4shoqb7Jef8+dz/AN+W/wAKPsl5/wA+dz/35b/Co9nPsV7SPchop8sM0WPNhkjz03oVz+dJHHJI22ON3b0VST+lKzvYrmVrjaKm+yXn/Pnc/wDflv8ACg2t0Bk2twB7xN/hT9nLsTzx7kNFFFSWKDS7m9TUgtbsgEWlwQehETf4UfZLz/nzuf8Avy3+FXyT7Ec8O5Hub/Io3N61J9ku/wDn0uf+/Tf4VDSaktxpxewpJ9TSVKttcsgdbadlIyGEbEY+uKipNNbjTT2CinxRTS58qGSTHXYhbH5Ujo8bFZEZGHUMCD+VFna4XV7DaKfFFLKSIopJCOuxC2PypJI5I22yRvG3oykH9aLO1wur2G0VJHb3Ei7o7eaRfVIyR+lO+yXn/Pnc/wDflv8ACmoSfQTnFdSGipvsl5/z53P/AH5b/CmmCdZFjaGRHY4VWQgn86HCS6Bzx7k1goUvcuPliGR7t2FVmYsxZuSTk1ev4LiKNbdbacRxcuxiYAt3OcVQq6qcLQ7fmZ0mpXmFFPjjkkbbFG8h9EUk/pSywzRAGWGWPPTehXP51nyu17GvMr2uR0UUUhhRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABXZfC7RLbUtQnvbyNZYrXGyNhkM57n1xiuNrrvhnrtvpOoTWt7IIre6AxIeiOOmfY5r1MkdBY6n7f4b9dr9PxPMzlVngqnsPit03t1/A63xH44sdG1BtPSzluZYsB9rBFXjoKveH9a03xXp88Ztj8uFmt5gGwD0I9R70mveFdG11/tcqskzAfv4H+8O2exrl7vwHq+nB5tC1Z2JHKbjE7D0yDg191XqZtQxEpyiqlHXRWvbp53+8+Jo08qrUIwUnTq6au9r9fL8jl/GOkrouvz2UeTDw8Weu09B+HSum+Ec3mapdK2fMS2wG9V3DiuK1J75rt11F52uIzsbzmJZcdua674Pf8AIcvf+vb/ANmFfI5ROLzeDpx5YuT07b6fI+rzWEllUlUfM0lr321+Z2PiXxbY6DeR2t1DdSO8fmAxYxjOO5rK/wCFk6R/z56h+S//ABVX/FXhG38QX0d3LezQGOPy9qICDznPNZH/AArOz/6C11/36WvrcbLPFXl9XiuTpt/mfK4OOSewj7dvn67/AORzvj7xJaeIWszaw3EfkB93mgc5x0wT6U74VHHi5Mf88JP6Vm+MdFj0HWPsMU7zr5SvudQDznjj6VpfCr/kbU/64Sf0r5KhUr1M5g8R8fMk/lofU1qdCGUTWH+Dldvnqeg+J/E9p4feBbuK5lM4JXyscY9cketZVv8AEXRZpljkhvYVY4LuoKj64NWvGvheTxFJasl6lt5AYENGW3Zx7+1Ydr8NAs6tdasHiB+ZY4cEj0yTX1uOq53HFSWGgnT0te3Zed9z5bBUsmeGTxEmp63tf5dLGp8RdCs73Q5tShhRLq3TzBIgxvTuD68civJj0NeufETWLTTfD82nJIpuriPykiByVXuT6cV5Gehr5jixUFjF7O17e9bv/mfScLus8I/aXtf3b9v8j3iG7Wy8ORXcm9khtFkYL1ICjpXNf8LK0j/nz1D8l/8Aiq6OO1W+8NR2bOUWe0WMsBkjKjmuUHwzs/8AoLXX/fpa+vzCWaJU/qSTVtb23+Z8pgY5Y3P642nfS19vkTTfEfSZIZIxaX4LIVGQvcfWvLq73X/ANrpmjXeoJqVxI0EZcI0agGuCr4jPamYSnCONSTS0tbr6eh9nkdPARhOWCbs3re/T19T3DwWT/wAInpnJx9nWvNfiFoX9j6yZYExZ3RLx46K3df8APavQvDs7WvgO0uUUM0VkXAPQ4BNF9BZ+L/CamJgBOgeJj1jkHY/jwa+vx2Bp5hl9Oiv4iipR+5X+/wDyPlMDjZ4HHTrP+G5NS+9/l/mcx8GiRPqeCR8kf8zWF8SjnxleZ/up/wCgiug+EcMttf6vbzoUljCK6nsQTXPfEr/kcrz/AHU/9BFfPYtNcP0U/wCd/wDtx72Faee1Wv5V/wC2m18GyRqGo4OP3Kf+hGqHxYJPivn/AJ9k/rV74Of8hDUf+uKf+hGqHxX/AORr/wC3dP606v8AyTsP8X6sVL/kfz/w/oi34J8Y6foeifYbm3u5JPNZ8xhcYOPU123hjxJa+IFna0iuIvIIDebjnPpgn0rxGvRvg1/qtT/3o/5GteHM4xVTEUsJJrks1t2TMuIMow0MPUxST57p792jb13xtp+j6nJp9xb3jyRgEtGF28jPc1xnjjX7XVbi2vraKeKRYSiCXGVyc7uCaT4hRxp4uu7mcZQKgRP752j9K5WaV5pDJIck/pXNnWcYqc6uHm1y8ztp2eh0ZPlGGjCniIJ81lfXutUeveAtcXXdDNvdt5lzAvlzq3/LRTwG/EcGvN/GGitoetS2uD9nf95Ax7oe34dKh8NatNousQ30eSoO2VP76HqK9c1TS9M8SWtjcSfvIkdZomX+Je6n2Pf6V20Y/wBv4BU7/vqf4r+vxXmclV/2HjnUS/dVPwf9fg/Iyvhtow0nRW1C5AjuLpd7FuNkY5A/qa4Lxtrr67rLyqzfZYspbqfTu31Ndj8U9e+y2Y0W1bE065mK/wAEfYfj/KvMa48/xUMPThluHfuw+Lzf9avz9DqyLDTr1JZhXXvS28l/Wi8vUKKKK+VPqAooooAKKKKACiiigAooooAKKKKACiiigArpvC3g+516xN5FfW8EQkMZDKWYEe341zNdP4B8SroN3JDdBmspyN+0ZKMOjAd/evQytYV4mMcX8D+Vux5+ZvFLDSlhfjRnm81nw7qM9jb39xA0EhUqrHaffaeOa7f4feK9R1fUH07UEjlIiMizIu0jHYgcd61r2z8JeJNt1NJaXDgAeYk2x8eh5B/Olt5PCnhe2kMM1rb7h822TfI/t3Jr7HA5biMDiFUjiV7Fa/F07W2+dz5PG5hQxtD2csO/bPy6+u/yscl8X7aKPV7O5QASTQkPjvtPB/Wk+D3/ACHL3/r2/wDZhWD4w1xte1hrvYY4UXZCh6hfU+5rX+Fd5Z2WsXcl5dQ26Nb7VaVwoJ3DjmvFoYqjVz1VoO0XL9N/mevWw1WlkjozV5KP67fIv/FLUdQstetVtL24gX7OGKxyFQTuPUCuZfVdVuUMlvql8sg5eIXDfmOa9L1OTwZqcyzahc6VcSKu1WecZA9OtVks/h+jBlOkKw6ET/8A169XHZXWxGJnUhiIqMntzPQ8zBZlSoYeFOVCTlFb8q1PKbq4uLqXzbqeWeTGN0jljj0ya6b4Vf8AI2p/1wk/pV7x7beGWt7Y6PLYpcPId5hfdkY/i54rO+HcsOneKlkv5o7ZBC43ysFXJxjmvBw+Flg80pxnNStJap6fee3XxKxeWVJQg43i9GtTpvihq+p6XPYDT72W2EiuXCY+bBGM5q/4D8R/2/Yy2t9s+2RD5wBgSIf4v8a5r4r39jfTaebK8guQivu8pw2OR1xXJ6NqNxpWpQ39q2JImzjsw7qfY16uKzueDzecubmp6Jq91ay2PMw2TwxeVQXLaprZ2s73e5ufEDw4dFvxc2+97K4J2ljko390n+Vcuehr2LUdU8OeINAa3uNTtIVuIwwWSUB4m7ZB7g15BcxmGaSEsjlGK7kOVbHcHuK8rP8AA0cPXVTDtOE9dHs+3+R6mRY2tXounXTU46a9V/W57XfO8fgqSSN2R10/KspwQdnUGvHxrWsY/wCQtf8A/gQ3+Net2mr6BLo0Frc6pYMjW6pJG068jaAQeaofYfh7/wBQf/v/AP8A16+mzfBzx3s5Ua8YpK3xW/I+byrGRwXtI1qMpXf8t/zPMZtV1SaJoptSvJI2GGR5mII9xmqdetfYfh9/1B/+/wD/APXryi42i4kCY2bztx0xnivkc0y+phOV1Kqnfs72sfV5Zj6eK5lTpuFu6tc9g0n/AJJvF/2D2/8AQTXHfC7XvsGof2Xcvi2uiNhJ4ST/AOv0/Kuk0zV9KTwDHavqVos4sWQxmUbt2Dxj1rylSRggkEdCO1e5muYPCzwlai7uMdfwumeLlmAWJhiqNVWUpafjZo97g06CDVrnUYxtkuY1SUdiVzg/XBryf4lf8jlef7qf+giu68I+LLC90aM6lfW9vdxfJJ5sgXfjowz6/wA64H4gXFvdeK7qe1mjmiZUw8bblPyjvXXxHicNXy2EqDWsr266p309dzm4fw+Io5hONZPSNr+jVtfTY3fg5/yENR/64p/6EaofFf8A5Gv/ALd0/rU/wpvrKxvr9r27gtleJAplcKCcnpmqnxIuINQ8UCSxmjukMCLuibcM88cV5lWpB5BCCevNt13Z6FOElns5tacu/TZHLV6T8Ho3S31F2XAdk2+/WuB2xWnMm2WfsvVV+vqa7T4W6pZ2w1FtQvoIGkZNvmyBc4z0zXJw64Usxpubtv8ALR7nVn/PVwE1BX2+eq2MX4mMT4xugSSAiY9vlFc1XQfEG4t7rxXcz2s0c8TKmHjbcp+Ud65+vOzSSljarT+0/wAz0Msi44Okmvsr8gr1r4Tu7+FtrMWCXDqoJ6Dg4/WvJa9M+GOqaZZ+HWhvNQtbeT7QzbZJQpxgc8163CtSNPH3k7Kz/Q8zienKeBtFXd1+pw/ix3k8Tak0jFm+0OMk9gcCsutDxHJHNr9/LE6yRvcOyspyCM9RWfXhYt3rzfm/zPawqtQgvJfkFFFFYG4UUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUABAPUA0AAdABRRSAKKKKYBRRWze6BNb+FLHxAtwksd1I0bQhSGjwSASe4JBqo05STaWxEqkYtJvfQxqniuWVPLlUSxf3W7fQ9q3bvwnNa+ItJ0WS9j83UI42LhDiEsSCpGeSMVm6na6PbwM1jrT3k6tjyjZtEMdzuLGtPZ1Kd3t06dPzM1Vp1LJa38n/SK/2aKbm1lBP/ADzfhvw9aryRvG22RSp9CK6G78J3VvdaJH9qjeHVhGFmVTiF2wdjDPUAg+4pfDlhBqN++l3WrCGYSMkaPamVWCgkncCNvQ8VfsW5crVn/X+Zn9Yio8yd0c3RW9baXpWpa3Fp+n38nlOpZ7l4CqRgAliVJzgAetC+GZm8UJoQvIN7zrEJfZuj47ggg0lhajty63dtC/rVNfFppfXsYNFWZ7K5hkdWhc7WIyBkHBqe10yS40q/vlYhrLy2aIocsrNt3A+xx+dZezne1jV1I2vcz6K6a88IzWuqW9lJfRbJLN7mWYIcRFFJdCM8kEAfjVWz0WxbQ7bVNQ1Z7MXMskcca2bSnKYySQR6ireHqJtNbehmsTSaTT39f66GHRWvbaG92upy2szvDZQ+cjtCVMw3qvQn5fvZ/CjRtDl1C4lhe5htvLt5JyW+YkIuSMCl7CpppuN4imk3fYyKVFZmCqpJPYCtbQNOs9R1mz037Q265kEfmFcKme57mrd3pV9aNrELtFbHTUVyI1z5yswVSrehBBzVrDvl5ntrt5K/5EyxC5uVb+fm7fmY4tFjG66kEQ/uDlj+FI9ztUx26eUncj7zfU1rNo2lQWFhdalrzW0t7B56xrZNJtXcV5YMPSq+jaPHfW17fT3xtrKzKq8qwNKxLE7cIO3HJJ4o5ZJ8sFb5q/z7fgSqkGuaTv8AJ2+Xf8TIorYi0P7T4gttKsNQtrtbkBorhMhdpGTuXqGAByvXNR6tpthbWouLHWI7zEvlSRPA0MqHGQdjHJX37Gs3Skk2aqtBtLv6/wBIy6KKKzNQooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigArsdF1/SItP03T9Q817aK2k89VjJxKs3mxY9QehPYMa46itaVaVJtxMq1GNVJSOsi8QWknibw7ql1LJi0VTeMEJIbzHY4Hf7wqDxNqIvrBkbxVLqeJNyW7WJiH13e1c1RTeIk4OD9evl5+RCw0FJSXT0/y8+h2+k+KdNg8QWv2vzZdK+z2omwh3RTQqMSKO+CCPcGsHw/qFrZ+K01G4ZhbiSViVXJwysBx+IrGooliJyab6Nv7xRwsIppdVY2vDupWulWGozNFHcXs8a28UUqFo/LY/vCcewAx7mtJde02fXfDutTqLee0ZUvY4YjtCRt8jL6/Lxj2rk6KcMROCSXS34O454aEm293/lb+vM1dVSwtyZdN1t7tnkJZBbPFtB5zknmrng3WorDWCdVmmawmiaOYKNx7MvH+8ornqKUK8qc1KOn5DnQjODjLXz0udf/AMJb5vhzVIriST+0p7hzbkLwsUrAyDPb7oAHuam0fxIIvDFpYp4mn0m5iuJXlC2ZlDq23byPTBriqK0WMqrr0t1/zMngaNrJdb9P1R0umahY/addt9Q1mVo7638uO7+zs25vMVslByOhpmgzaPpeuy7tUaazlspoTcC1YFWdSB8nU1ztFZ+3btdbev8An5mn1dWau7P09O3l6G9o8mk6N4n0y8j1Nr22ik3zOts0ZT2weTVyHxBZzeD9Q069WT+0fLWC0lC5EkPmB9jHttwcH0OK5WinHESjFxjtr+OgSw8ZNSk9Vb8NTt7fX4f7D0q1t/FM+ltbWvlTQixaQF9zHIb6EVj+G72ysnux/a15pt0XBgvoEZlZOco8YPQ8HvisCij6zK6fb1/z0+VhLCwSaT39P8tfnc6bUtV0e58UWl5IJ5oI4lS5uYE8iSaUA/vlUdCCRx3289af4l1i1u9DFnJq0ut3nnq8V1LaeU0KAHKljy27j2GK5aih4iTUl3GsNFOLvt/X9WsFFFFYHQFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQB//Z';
$activeTheme = $_GET['theme'] ?? '';

$themes = [
        [
                'slug'  => 'sante-mentale',
                'icon'  => '🧠',
                'title' => 'Santé mentale',
                'color' => '#4F8EF7',
                'desc'  => 'Stress, anxiété, dépression',
                'intro' => 'La santé mentale est aussi importante que la santé physique. En période d\'études, il est courant de ressentir du stress, de l\'anxiété ou une profonde tristesse. Tu n\'es pas seul(e) — et il existe des ressources pour t\'aider à traverser ces moments difficiles.',
                'sections' => [
                        [
                                'subtitle' => '😟 Comprendre l\'anxiété',
                                'text'     => 'L\'anxiété se manifeste par une inquiétude excessive, des palpitations, des tensions musculaires ou des difficultés à se concentrer. Elle est normale en petites doses, mais peut devenir handicapante. Des techniques comme la respiration profonde (cohérence cardiaque), la méditation guidée ou le journaling peuvent aider à la réguler au quotidien.',
                        ],
                        [
                                'subtitle' => '😞 Reconnaître la dépression',
                                'text'     => 'La dépression va au-delà d\'une simple tristesse passagère. Elle se caractérise par une perte d\'intérêt, une fatigue persistante, des changements d\'appétit ou de sommeil, et un sentiment de vide. Si tu ressens ces symptômes depuis plus de deux semaines, il est important d\'en parler à un professionnel de santé (médecin généraliste, psychologue, psychiatre).',
                        ],
                        [
                                'subtitle' => '📚 Gérer le stress académique',
                                'text'     => 'Les examens, les délais et les attentes académiques peuvent générer un stress intense. Quelques stratégies efficaces : décomposer les tâches en petites étapes, utiliser la technique Pomodoro (25 min de travail / 5 min de pause), dormir suffisamment (7–9h) et t\'accorder des moments de décompression sans culpabilité.',
                        ],
                        [
                                'subtitle' => '🆘 Ressources disponibles',
                                'text'     => 'En France, le numéro national de prévention du suicide est le <a href="tel:3114" style="color:var(--blue);font-weight:700;">3114</a> (24h/24, 7j/7). Les BAPU (Bureaux d\'Aide Psychologique Universitaire) proposent des consultations gratuites aux étudiants. Renseigne-toi auprès de ton service de santé universitaire (SSU/SSE).',
                        ],
                ],
        ],
        [
                'slug'  => 'handicap-invisible',
                'icon'  => '👁️',
                'title' => 'Handicap invisible',
                'color' => '#A78BFA',
                'desc'  => 'Comprendre et vivre avec',
                'intro' => 'Le handicap invisible regroupe des troubles qui ne se voient pas au premier regard mais qui impactent profondément le quotidien : troubles dys, TDAH, maladies chroniques, troubles psychiques... Comprendre, se faire reconnaître et obtenir des aménagements est un droit.',
                'sections' => [
                        [
                                'subtitle' => '🔍 Qu\'est-ce qu\'un handicap invisible ?',
                                'text'     => 'Parmi les handicaps invisibles on trouve : la dyslexie, la dyspraxie, le TDAH (Trouble Déficit de l\'Attention avec ou sans Hyperactivité), les troubles anxieux sévères, la fibromyalgie, les maladies auto-immunes, l\'épilepsie, les troubles bipolaires, et bien d\'autres. Ces situations sont reconnues comme handicaps au sens de la loi du 11 février 2005.',
                        ],
                        [
                                'subtitle' => '📋 Faire reconnaître son handicap à l\'université',
                                'text'     => 'Pour bénéficier d\'aménagements (tiers-temps aux examens, supports adaptés, aide humaine…), il faut contacter la Mission Handicap de ton établissement avec un certificat médical. La MDPH (Maison Départementale des Personnes Handicapées) peut également ouvrir des droits à l\'Allocation aux Adultes Handicapés (AAH).',
                        ],
                        [
                                'subtitle' => '💬 Parler de son handicap : à qui, comment ?',
                                'text'     => 'Tu n\'as aucune obligation de divulguer ton handicap à tes pairs ou à tes professeurs. Cependant, en informer la Mission Handicap te protège et t\'ouvre des droits. Des associations étudiantes spécialisées peuvent t\'accompagner dans ces démarches et rompre l\'isolement lié à ces situations.',
                        ],
                        [
                                'subtitle' => '🌐 Ressources utiles',
                                'text'     => 'L\'<strong>APF France Handicap</strong>, l\'association <strong>DYS-POSITIF</strong>, ou encore <strong>HappyNeuron</strong> proposent des outils pratiques. Le portail <a href="https://www.monparcourshandicap.gouv.fr" target="_blank" style="color:var(--blue);">monparcourshandicap.gouv.fr</a> centralise toutes les démarches administratives.',
                        ],
                ],
        ],
        [
                'slug'  => 'precarite',
                'icon'  => '💰',
                'title' => 'Précarité',
                'color' => '#34D399',
                'desc'  => 'Aides financières & logement',
                'intro' => 'La précarité étudiante est une réalité pour de nombreuses personnes : difficultés à se loger, à se nourrir, à financer ses études. Des dispositifs d\'aide existent — encore faut-il les connaître. Tu mérites de pouvoir te concentrer sur tes études dans des conditions dignes.',
                'sections' => [
                        [
                                'subtitle' => '🏠 Se loger : les aides disponibles',
                                'text'     => 'Les APL (Aides Personnalisées au Logement) de la CAF peuvent couvrir une partie de ton loyer. Les CROUS proposent des logements à tarif réduit (résidences universitaires). En cas d\'urgence, le Fonds National d\'Aide d\'Urgence (FNAU) permet d\'obtenir une aide exceptionnelle en faisant une demande auprès de ton CROUS.',
                        ],
                        [
                                'subtitle' => '🍽️ Se nourrir sans se ruiner',
                                'text'     => 'Les restaurants universitaires (CROUS) proposent des repas à 3,30 € pour les étudiants boursiers. Des épiceries solidaires et banques alimentaires existent sur la plupart des campus. L\'application <strong>Too Good To Go</strong> permet également de récupérer des invendus alimentaires à prix réduit.',
                        ],
                        [
                                'subtitle' => '💳 Aides financières pour les études',
                                'text'     => 'Les bourses sur critères sociaux (CROUS) sont la principale aide : elles vont de l\'échelon 0bis à l\'échelon 7. Au-delà, des aides d\'urgence existent via les assistantes sociales du CROUS. Certaines régions, mutuelles, fondations ou mairies proposent aussi des bourses complémentaires. Ne laisse pas la gêne t\'empêcher de demander ce à quoi tu as droit.',
                        ],
                        [
                                'subtitle' => '📞 À qui s\'adresser ?',
                                'text'     => 'Le service social du CROUS est ton premier interlocuteur. <a href="https://www.1jeune1solution.gouv.fr" target="_blank" style="color:var(--blue);font-weight:600;">1Jeune1Solution</a> recense toutes les aides auxquelles tu peux prétendre. <a href="https://www.mesaides.gouv.fr" target="_blank" style="color:var(--blue);font-weight:600;">Mes Aides</a> permet de simuler tes droits en quelques minutes.',
                        ],
                ],
        ],
        [
                'slug'  => 'isolement',
                'icon'  => '🌙',
                'title' => 'Isolement',
                'color' => '#60A5FA',
                'desc'  => 'Rompre la solitude',
                'intro' => 'Se sentir seul(e) est une expérience douloureuse, surtout loin de chez soi pour la première fois. L\'isolement peut toucher n\'importe qui, indépendamment de son nombre d\'amis ou de son entourage. Mais il existe des façons concrètes de tisser des liens et de retrouver un sentiment d\'appartenance.',
                'sections' => [
                        [
                                'subtitle' => '💡 Comprendre l\'isolement étudiant',
                                'text'     => 'L\'isolement n\'est pas seulement l\'absence de personnes autour de soi — c\'est aussi le sentiment de ne pas être compris ou connecté. Il est amplifié par les changements brutaux liés à l\'entrée dans l\'enseignement supérieur : nouvelle ville, nouveau rythme, perte des repères sociaux habituels. Ce sentiment est très répandu et n\'est pas un signe de faiblesse.',
                        ],
                        [
                                'subtitle' => '🤝 Créer des liens sur le campus',
                                'text'     => 'S\'impliquer dans une association étudiante, rejoindre un club de sport, participer à des événements de ta ville universitaire ou simplement engager une conversation dans ton amphi sont autant de portes d\'entrée vers de nouvelles rencontres. Les BDE (Bureaux Des Étudiants) organisent régulièrement des événements ouverts à tous.',
                        ],
                        [
                                'subtitle' => '📱 Le numérique : allié ou ennemi ?',
                                'text'     => 'Les réseaux sociaux peuvent donner l\'illusion d\'une connexion tout en accentuant le sentiment de solitude. Préfère les interactions réelles, même courtes : un café, une balade, un jeu de société. Des applications comme <strong>Meetup</strong> ou des groupes Facebook locaux permettent de trouver des personnes partageant tes centres d\'intérêt dans ta ville.',
                        ],
                        [
                                'subtitle' => '☎️ Parler à quelqu\'un maintenant',
                                'text'     => '<strong>Nightline France</strong> est une ligne d\'écoute tenue par des étudiants bénévoles, disponible la nuit (21h–2h30) au <a href="tel:0972729878" style="color:var(--blue);font-weight:700;">09 72 72 98 78</a>. Le service <strong>Fil Santé Jeunes</strong> (<a href="tel:3224" style="color:var(--blue);font-weight:700;">3224</a>, gratuit) est également disponible 7j/7 pour écouter sans juger.',
                        ],
                ],
        ],
        [
                'slug'  => 'orientation',
                'icon'  => '🎓',
                'title' => 'Orientation',
                'color' => '#FBBF24',
                'desc'  => 'Parcours académique & pro',
                'intro' => 'Le doute sur son orientation est l\'une des premières sources de détresse étudiante. Se poser des questions sur son avenir professionnel, vouloir changer de filière, ou ne pas savoir quoi faire après le diplôme : tout cela est normal. L\'important, c\'est d\'avoir les bons outils pour avancer.',
                'sections' => [
                        [
                                'subtitle' => '🗺️ Se questionner sans paniquer',
                                'text'     => 'Il n\'existe pas de parcours linéaire unique. Beaucoup d\'étudiant(e)s changent d\'orientation au moins une fois, et c\'est souvent une chance de mieux se connaître. Prends le temps de lister ce qui te passionne, ce qui te pèse, et ce que tu imagines faire dans dix ans — sans te mettre la pression de trouver une réponse immédiate.',
                        ],
                        [
                                'subtitle' => '📌 Les ressources d\'orientation disponibles',
                                'text'     => 'Chaque université dispose d\'un <strong>SCUIO-IP</strong> (Service Commun Universitaire d\'Information, d\'Orientation et d\'Insertion Professionnelle) qui propose des entretiens gratuits. <strong>Parcoursup</strong> et <strong>Mon Master</strong> centralisent les formations disponibles. <a href="https://www.onisep.fr" target="_blank" style="color:var(--blue);font-weight:600;">ONISEP</a> propose des fiches métiers et des guides d\'orientation.',
                        ],
                        [
                                'subtitle' => '💼 Explorer le marché du travail',
                                'text'     => 'Les stages, alternances, jobs étudiants et engagements associatifs sont autant d\'expériences qui t\'aident à affiner ton projet. Des plateformes comme <strong>Indeed</strong>, <strong>LinkedIn</strong>, <strong>Jobijoba</strong> ou encore <strong>Welcome to the Jungle</strong> permettent d\'explorer les offres et de comprendre ce que les employeurs recherchent.',
                        ],
                        [
                                'subtitle' => '🧭 Changer de voie : comment faire ?',
                                'text'     => 'Changer de formation est possible et encadré. En cours d\'année, tu peux effectuer une demande de réorientation auprès de ta scolarité. Entre deux années, Parcoursup permet des changements de filière. Le Bilan de Compétences (accessible dès 18 ans) est un accompagnement structuré pour clarifier son projet professionnel avec un conseiller.',
                        ],
                ],
        ],
        [
                'slug'  => 'bien-etre-physique',
                'icon'  => '🏃',
                'title' => 'Bien-être physique',
                'color' => '#F87171',
                'desc'  => 'Vie saine & équilibrée',
                'intro' => 'Le corps et l\'esprit sont profondément liés. Prendre soin de sa santé physique — sommeil, alimentation, activité physique — est l\'un des leviers les plus puissants pour améliorer son bien-être mental. Et pas besoin de devenir athlète : de petits gestes quotidiens suffisent.',
                'sections' => [
                        [
                                'subtitle' => '😴 Le sommeil : pilier de la santé',
                                'text'     => 'Les étudiant(e)s dorment en moyenne trop peu. Or, le manque de sommeil dégrade la concentration, la mémoire, l\'humeur et le système immunitaire. Vise 7 à 9 heures par nuit. Quelques astuces : éviter les écrans 1h avant de dormir, avoir des horaires réguliers (même le week-end), et pratiquer une courte relaxation ou méditation au coucher.',
                        ],
                        [
                                'subtitle' => '🥗 Bien manger sans se ruiner',
                                'text'     => 'Une alimentation équilibrée n\'implique pas de grands budgets. Cuisiner soi-même (légumes de saison, légumineuses, œufs) est à la fois économique et nutritif. Évite les excès de caféine (café, boissons énergisantes) qui amplifient l\'anxiété. Hydrate-toi correctement — souvent sous-estimé, la déshydratation affecte la concentration.',
                        ],
                        [
                                'subtitle' => '🏋️ L\'activité physique, même un peu',
                                'text'     => 'L\'OMS recommande 150 minutes d\'activité modérée par semaine — soit 20 minutes par jour. Marcher, faire du vélo, nager, danser : toutes les activités comptent. Le sport en groupe (via les associations sportives universitaires, les SUAPS) est aussi un excellent vecteur de liens sociaux et de décompression.',
                        ],
                        [
                                'subtitle' => '🩺 Suivre sa santé : les droits des étudiant(e)s',
                                'text'     => 'Les étudiant(e)s bénéficient de la Sécurité Sociale étudiante. Des consultations de prévention gratuites sont disponibles dans les Services de Santé Universitaire. En cas de coup dur, les mutuelles étudiantes (LMDE, SMENO…) proposent des prises en charge psychologiques remboursées. N\'attends pas que ça aille mal pour consulter.',
                        ],
                ],
        ],
];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SERENITY – Ressources</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <style>
        /* ── Ressources page extras ── */
        .theme-tabs {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
            justify-content: center;
            margin-bottom: 40px;
        }
        .theme-tab {
            display: inline-flex;
            align-items: center;
            gap: 7px;
            padding: 9px 18px;
            border-radius: 50px;
            border: 1.5px solid var(--border);
            background: rgba(0,135,255,.05);
            color: var(--text-light);
            font-size: .85rem;
            font-weight: 500;
            cursor: pointer;
            text-decoration: none;
            transition: all .2s;
        }
        .theme-tab:hover {
            border-color: var(--blue);
            color: #fff;
            background: rgba(0,135,255,.12);
        }
        .theme-tab.active {
            border-color: var(--blue);
            background: rgba(0,135,255,.2);
            color: #fff;
            box-shadow: 0 0 16px rgba(0,135,255,.25);
        }
        .theme-section {
            display: none;
            animation: fadeInUp .35s ease;
        }
        .theme-section.active {
            display: block;
        }
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(18px); }
            to   { opacity: 1; transform: translateY(0); }
        }
        .theme-hero {
            border-radius: 20px;
            padding: 36px 40px;
            margin-bottom: 32px;
            border: 1px solid var(--border);
            background: linear-gradient(135deg, var(--navy-card) 0%, var(--navy-mid) 100%);
            position: relative;
            overflow: hidden;
        }
        .theme-hero::before {
            content: '';
            position: absolute;
            top: -40px; right: -40px;
            width: 200px; height: 200px;
            border-radius: 50%;
            background: var(--theme-color, var(--blue));
            opacity: .06;
        }
        .theme-hero-icon {
            font-size: 3rem;
            margin-bottom: 12px;
        }
        .theme-hero h2 {
            font-size: 1.8rem;
            font-weight: 800;
            color: #fff;
            margin-bottom: 8px;
        }
        .theme-hero p {
            color: var(--text-light);
            font-size: .97rem;
            max-width: 720px;
            margin: 0;
            line-height: 1.7;
        }
        .resource-card {
            background: var(--navy-card);
            border: 1px solid var(--border);
            border-radius: 16px;
            padding: 28px 32px;
            margin-bottom: 20px;
            transition: border-color .2s, box-shadow .2s;
            height: 100%;
        }
        .resource-card:hover {
            border-color: rgba(0,135,255,.4);
            box-shadow: 0 4px 24px rgba(0,135,255,.08);
        }
        .resource-card h5 {
            font-size: 1.05rem;
            font-weight: 700;
            color: #fff;
            margin-bottom: 12px;
        }
        .resource-card p {
            color: var(--text-light);
            font-size: .92rem;
            line-height: 1.75;
            margin: 0;
        }
        .resource-card p strong { color: #fff; }
        .page-header {
            padding: 52px 0 20px;
            text-align: center;
        }
        .page-header h1 {
            font-size: 2.4rem;
            font-weight: 800;
            color: #fff;
        }
        .page-header h1 span { color: var(--blue); }
        .page-header p {
            color: var(--text-muted);
            font-size: .95rem;
            max-width: 560px;
            margin: 10px auto 0;
        }
    </style>
</head>
<body>

<!-- ═══════════ NAVBAR ═══════════ -->
<nav class="navbar navbar-expand-lg sticky-top">
    <div class="container">
        <a class="navbar-brand" href="index.php">
            <div class="logo-circle">
                <img src="data:image/jpeg;base64,<?= $logoB64 ?>" alt="Logo">
            </div>
            SERENITY
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMain">
            <i class="bi bi-list" style="color:var(--blue);font-size:1.3rem;"></i>
        </button>

        <div class="collapse navbar-collapse" id="navMain">
            <ul class="navbar-nav mx-auto gap-1">
                <li class="nav-item"><a class="nav-link" href="index.php">Accueil</a></li>
                <li class="nav-item"><a class="nav-link" href="temoignages.php">Témoignages</a></li>
                <li class="nav-item"><a class="nav-link active" href="ressources.php">Ressources</a></li>
                <li class="nav-item"><a class="nav-link" href="mon-espace.php">Mon Espace</a></li>
                <li class="nav-item"><a class="nav-link" href="communaute.php">Communauté</a></li>
                <li class="nav-item">
                    <a class="nav-link urgence" href="urgences.php">
                        <i class="bi bi-telephone-fill me-1"></i>Urgences
                    </a>
                </li>
            </ul>
            <div class="d-flex align-items-center gap-2">
                <input type="text" class="search-input d-none d-lg-block" placeholder="🔍 Rechercher…">
                <?php if ($user): ?>
                    <div class="dropdown">
                        <button class="btn-user dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="bi bi-person-circle me-1"></i>
                            <?= htmlspecialchars($user['prenom']) ?> <?= htmlspecialchars($user['nom'][0]) ?>.
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li>
                                <div class="px-3 py-2" style="border-bottom:1px solid var(--border);margin-bottom:4px;">
                                    <div style="font-size:.8rem;color:#64748B;">Connecté en tant que</div>
                                    <div style="font-size:.9rem;color:#fff;font-weight:600;"><?= htmlspecialchars($user['prenom'].' '.$user['nom']) ?></div>
                                    <div style="font-size:.78rem;color:#475569;"><?= htmlspecialchars($user['email']) ?></div>
                                </div>
                            </li>
                            <li><a class="dropdown-item" href="mon-espace.php"><i class="bi bi-person me-2" style="color:var(--blue)"></i>Mon Espace</a></li>
                            <li><a class="dropdown-item" href="communaute.php"><i class="bi bi-people me-2" style="color:var(--blue)"></i>Communauté</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item text-danger" href="logout.php"><i class="bi bi-box-arrow-right me-2"></i>Déconnexion</a></li>
                        </ul>
                    </div>
                <?php else: ?>
                    <a href="login.php" class="btn-nav-login">
                        <i class="bi bi-box-arrow-in-right me-1"></i>Connexion
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</nav>

<!-- ═══════════ EN-TÊTE PAGE ═══════════ -->
<div class="container">
    <div class="page-header">
        <h1>📖 Ressources & <span>Thématiques</span></h1>
        <p>Sélectionne une catégorie pour accéder aux informations, conseils et aides disponibles.</p>
    </div>
</div>

<div class="blue-line"></div>

<!-- ═══════════ ONGLETS THÉMATIQUES ═══════════ -->
<div class="container mb-2">
    <div class="theme-tabs">
        <?php foreach ($themes as $i => $t): ?>
            <a href="ressources.php?theme=<?= $t['slug'] ?>"
               class="theme-tab <?= ($activeTheme === $t['slug'] || ($activeTheme === '' && $i === 0)) ? 'active' : '' ?>"
               data-slug="<?= $t['slug'] ?>">
                <?= $t['icon'] ?> <?= htmlspecialchars($t['title']) ?>
            </a>
        <?php endforeach; ?>
    </div>
</div>

<!-- ═══════════ CONTENU DES THÈMES ═══════════ -->
<div class="container mb-5" id="themes-content">
    <?php foreach ($themes as $i => $t):
        $isActive = ($activeTheme === $t['slug']) || ($activeTheme === '' && $i === 0);
        ?>
        <div class="theme-section <?= $isActive ? 'active' : '' ?>" id="theme-<?= $t['slug'] ?>">

            <!-- Hero du thème -->
            <div class="theme-hero" style="--theme-color:<?= $t['color'] ?>;">
                <div class="theme-hero-icon"><?= $t['icon'] ?></div>
                <h2 style="color:<?= $t['color'] ?>;"><?= htmlspecialchars($t['title']) ?></h2>
                <p><?= htmlspecialchars($t['intro']) ?></p>
            </div>

            <!-- Cartes d'explication -->
            <div class="row g-4">
                <?php foreach ($t['sections'] as $s): ?>
                    <div class="col-lg-6">
                        <div class="resource-card">
                            <h5><?= $s['subtitle'] ?></h5>
                            <p><?= $s['text'] ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- Bouton retour -->
            <div class="text-center mt-5">
                <a href="index.php" class="btn-hero-outline">
                    <i class="bi bi-arrow-left me-2"></i>Retour à l'accueil
                </a>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<!-- ═══════════ FOOTER ═══════════ -->
<footer class="py-5 mt-4">
    <div class="container">
        <div class="row align-items-center g-3">
            <div class="col-md-4">
                <div class="d-flex align-items-center gap-2 mb-2">
                    <div style="width:32px;height:32px;border-radius:50%;overflow:hidden;border:1px solid var(--border);">
                        <img src="data:image/jpeg;base64,<?= $logoB64 ?>" style="width:100%;height:100%;object-fit:cover;" alt="">
                    </div>
                    <span class="brand">SERENITY</span>
                </div>
                <p style="font-size:.82rem;margin:0;">Là où tout s'apaise.</p>
            </div>
            <div class="col-md-4 text-center">
                <div class="d-flex justify-content-center gap-4 flex-wrap">
                    <a href="index.php">Accueil</a>
                    <a href="ressources.php">Ressources</a>
                    <a href="communaute.php">Communauté</a>
                    <a href="urgences.php">Urgences</a>
                </div>
            </div>
            <div class="col-md-4 text-md-end">
                <p style="font-size:.82rem;margin:0;">© <?= date('Y') ?> SERENITY. Tous droits réservés.</p>
            </div>
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // Changement d'onglet sans rechargement de page
    document.querySelectorAll('.theme-tab').forEach(tab => {
        tab.addEventListener('click', function(e) {
            e.preventDefault();
            const slug = this.dataset.slug;

            document.querySelectorAll('.theme-tab').forEach(t => t.classList.remove('active'));
            this.classList.add('active');

            document.querySelectorAll('.theme-section').forEach(s => s.classList.remove('active'));
            document.getElementById('theme-' + slug).classList.add('active');

            history.pushState({}, '', 'ressources.php?theme=' + slug);

            document.getElementById('themes-content').scrollIntoView({ behavior: 'smooth', block: 'start' });
        });
    });
</script>
</body>
</html>