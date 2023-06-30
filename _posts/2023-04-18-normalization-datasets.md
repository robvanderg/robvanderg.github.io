---
title: "Normalization datasets"
date: 2023-04-18T15:00:00-00:00
categories:
  - datasets
tags:
  - normalization
  - multi-lingual
  - datasets
  - social media data
---

In the MultiLexNorm shared task (WNUT 2021), we made a first attempt at homogenising multiple lexical normalization datasets in a variety of languages into one standard. This project was started to improve the evaluation and comparison of existing lexical normalization models, as well as pushing the focus to a larger variety of languages. We defined lexical normalization as the task of "transforming an utterance into its standard form, word by word, including both one-to-many (1-n) and many-to-one (n-1) replacements." An example of an utterance annotated for this task would be:

| most | social | pple | r   | troublsome |
| most | social | people | are | troublesome |

More examples and information about MultiLexNorm can be found on the [task website](http://noisy-text.github.io/2021/multi-lexnorm.html) and [overview paper](http://noisy-text.github.io/2021/multi-lexnorm.html/).

On this page, I collect references to datasets that were not included in MultiLexNorm for a variety of reasons, some of these are word-based, not publicly available/sharable, they include translation/transcription, or I only found out about them after the shared task. Hopefully, the MultiLexNorm benchmark will be expanded in the future with more varied languages. Note that I focus on social media datasets here, there are also historical and medical datasets for the lexical normalization task.

| Language | Source | Notes |
| --- | --- | --- |
| Bangla-English | [Dutta et al. (2015)](https://ieeexplore.ieee.org/document/7232908) | Paper behind paywall |
| Chinese (Mandarin) | [Li & Yarowsky (2008)](https://aclanthology.org/D08-1108.pdf) | No context |
| Chinese (Mandarin) | [Wang et al. (2013)](https://aclanthology.org/I13-1015v2.pdf) | No context |
| Danish | [Hansen et al. (2023)](https://openreview.net/pdf?id=OAL36C-9qfE) | Not public, after shared task |
| Flemish | [De Clercq et al. (2013)](https://aclanthology.org/R13-1024.pdf) | Not public, includes translation (to Dutch) |
| Finnish | [Vehomäki (2022)](https://helda.helsinki.fi/bitstream/handle/10138/344932/Vehomaki_Varpu_thesis_2022.pdf) | After MultiLexNorm |
| Greek | [Toska (2020)](https://www.diva-portal.org/smash/get/diva2:1499642/FULLTEXT01.pdf) |     |
| Hindi-English | [Bhat et al. (2018)](https://aclanthology.org/N18-1090.pdf) | Includes transcription |
| Hindi-English | [Makhija et al. (2020)](https://aclanthology.org/2020.coling-industry.13.pdf) |     |
| Indonesian | [Kurnia & Yulianti (2020)](https://colips.org/conferences/ialp2020/proceedings/papers/IALP2020_P32.pdf) | There seems to be no word allignment |
| Irish | [Cassidy et al. (2022)](https://aclanthology.org/2022.acl-long.473.pdf) |     |
| Japanese | [Kaji & Kitsuregawa (2014)](https://aclanthology.org/D14-1011.pdf) |     |
| Japanese | [2017](https://ipsj.ixsq.nii.ac.jp/ej/?action=repository_uri&item_id=178802&file_id=1&file_no=1) |     |
| Japanese | [Higashiyama et al. (20](https://aclanthology.org/2021.naacl-main.438.pdf) |     |
| Latvian | [Deksne (2019)](https://www.scitepress.org/Papers/2019/76935/76935.pdf) |     |
| Portuguese | [Costa Bertaglia & Volpe Nunes (2016)](https://aclanthology.org/W16-3916.pdf) | small |
| Portuguese | [Sanches Duran et al. (2015)](https://aclanthology.org/W15-4305.pdf) | small, Brazilian Portuguese |
| Urdu | [Khan et al. (2020)](https://arxiv.org/pdf/2004.00088.pdf) |     |
| Uyghur | Tursun & C¸ akıcı (2017) | Includes transcription |
| Vietnamese | [Nguyen et al. (2015)](https://link.springer.com/chapter/10.1007/978-3-319-21206-7_16) | Not available |
| Singlish | [Liu et al (2022)](https://aclanthology.org/2022.coling-1.345.pdf) | Includes translation |

Note: Dutch, Turkish and English datasets not in MultiLexNorm are not listed here yet. For English, a recent survey ([Zhang et al. (2022)](https://sentic.net/survey-on-syntactic-processing-techniques.pdf)) lists some of the datasets.

