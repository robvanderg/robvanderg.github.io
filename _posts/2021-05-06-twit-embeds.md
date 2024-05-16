---
title: "Multilingual Twitter word embeddings"
date: 2021-05-06T15:00:00-00:00
categories:
  - modeling
tags:
  - word2vec
  - word embeddings
  - multi-lingual
  - social media data
---

Since I have started to work on Twitter data, word embeddings have proven to be very useful. In the last two years, word embeddings have mostly been replaced by contextualized transformer based embeddings. For multi-lingual contextual twitter embeddings I refer to [Barbieri et al.](https://arxiv.org/pdf/2104.12250.pdf) (also available on [huggingface](https://huggingface.co/cardiffnlp/twitter-xlm-roberta-base)). However, there are still many cases where word embeddings are preferable, because of their efficiency.

I have prepared word embeddings for all languages included in the [Multi-LexNorm shared task](http://noisy-text.github.io/2021/multi-lexnorm.html). The procedure was as follows:

* Download sample of tweets between 2012-2020 from [archive.org](https://archive.org/details/twitterstream)
* Used the [Fasttext language classifier](https://fasttext.cc/docs/en/language-identification.html) for language identification. Empirical results looked much better as the Twitter provided language labels.
* For the code-switched language pairs, I have simply concatenated both mono-lingual datasets, as it is non-trivial to filter for code-switched data.
* Cleaned usernames and url's to make the vocabulary smaller, and anonymize. Used the following command:

```
sed -r 's/@\[^ \]\[^ \]*//g' | sed -r 's/(http\[s\]?:\\/\[^ \]*|www\\.\[^ \]*)//g'
```

* Removed duplicates with (note that this stores intermediate results in /dev/shm, which should be quite large):

```
sort -T /dev/shm | uniq
```

* trained word2vec with the following settings:

```
./word2vec/word2vec -train nl.txt -output nl.bin -size 400 -window 5 -cbow 0 -binary 1 -threads 45
```

You might notice that I did not do any tokenization. This is not because I forgot. This is done because any consistent errors in tokenization would lead to specific words being excluded from the vocabulary.

The sizes of the files, and the number of characters, words and tweets are:

| Language | Code | Chars | Words. | Tweets | Size |
| --- | --- | --- | --- | --- | --- |
| Danish | da  | 159,067,945 | 26,410,783 | 2,939,931 | 152M |
| German | de  | 4,017,217,589 | 602,955,881 | 72,054,802 | 3.8G |
| English | en  | 183,774,280,286 | 31,463,897,778 | 2,526,522,685 | 172G |
| Spanish | es  | 75,656,330,294 | 9,602,044,523 | 765,704,695 | 53G |
| Croatian | hr  | 99,558,448 | 16,352,437 | 2,007,553 | 95M |
| Indonesian | id  | 15,355,311,741 | 2,479,391,528 | 196,348,197 | 15G |
| Indonesian-English | iden | 199,129,592,027 | 33,943,289,306 | 2,722,870,882 | 186G |
| Italian | it  | 4,082,095,927 | 650,557,697 | 64,662,978 | 3.9G |
| Dutch | nl  | 2,842,694,893 | 480,387,036 | 45,942,710 | 2.7G |
| Slovenian | sl  | 192,472,502 | 22,977,241 | 3,577,682 | 184M |
| Serbian | sr  | 403,058,101 | 58,043,354 | 5,903,680 | 385M |
| Turkish | tr  | 11,400,083,503 | 1,461,947,731 | 133,557,943 | 11G |
| Turkish-German | trde | 15,417,301,092 | 2,064,903,612 | 205,612,745 | 15G |

The results of this procedure are hosted on: [http://www.itu.dk/people/robv/data/monoise/](http://www.itu.dk/people/robv/data/monoise/), note that smaller/older versions for most languages can be found on: [http://www.itu.dk/people/robv/data/monoise-old](http://www.itu.dk/people/robv/data/monoise-old)

When using [Gensim](https://pypi.org/project/gensim/), there can be unicode incompatabilities in some of these models, set unicode_errors='ignore' when loading the embeddings. Thanks to [Elijah Rippeth](https://groups.google.com/g/multilexnorm/c/UTElCV6va4s) for this addition.

Besides the embeddings, I have also counted uni- and bi-gram frequencies on the same data with a minimum frequency of 3. They are saved in binary format, and can be extracted using the following code: [https://bitbucket.org/robvanderg/utils/src/master/ngrams/](https://bitbucket.org/robvanderg/utils/src/master/ngrams/).
